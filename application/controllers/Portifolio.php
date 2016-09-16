<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Portifolio extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Portifolio_m');
        $this->load->helper(array('form', 'url'));
        $this->load->helper("file");
        init_layout();
        set_layout('titulo', 'Portifolio', FALSE);
    }

    public function index() {
        $data['titulo_painel'] = 'Portifolio';
        $data['portifolio'] = $this->Portifolio_m->get_object_list();
        set_layout('conteudo', load_content('portifolio/index', $data));
        load_layout();
    }

    public function form() {
        $id = $this->uri->segment(3);
        if (empty($id)) {
            $data['acao'] = 'inserir';
            $data['titulo_painel'] = 'Inserir Portifolio';
        } else {
            $objeto = $this->Portifolio_m->get_object($id);
            $data['portifolio'] = $objeto;
            $data['acao'] = 'editar';
            $data['titulo_painel'] = 'Editar Portifolio';
        }
        set_layout('conteudo', load_content('portifolio/form', $data));
        load_layout();
    }

    public function inserir() {
        //Faço o upload enviando a pasta destino
        $upload = $this->do_upload($this->input->post('portifolio'),$this->input->post('item'));
        //Se ocorrer um erro, $upload['error'] virá com uma string
        if(!empty($upload['error'])){
            $this->session->set_flashdata('erro', $upload['error']);
            redirect(base_url('portifolio/form'), 'location');
        }
        //Troco as barras do endereço do servidor com barras invertidas. Ex: C:\xampp\web
        $server_path = str_ireplace('\\','/',getcwd());
        //Retiro o endereço do servidor para armazenar somente minha estrutura de pastas
        $path = str_ireplace($server_path,'',$upload['upload_data']['file_path'].$_FILES['local']['name']);


        $objeto = new Portifolio_m();
        $objeto->id = null;
        $objeto->local = $path; //variável somente com minha estrutura de pasta
        $objeto->titulo = $this->input->post('titulo');
        $objeto->descricao = $this->input->post('descricao');
        $objeto->portifolio = $this->input->post('portifolio');
        $objeto->item = $this->input->post('item');
        $objeto->alt = $this->input->post('alt');
        
        $id = $this->Portifolio_m->inserir($objeto);

        //Se ocorer um erro no bd, retiro o arquivo inserido na pasta
        if (empty($id)) {
            unlink($objeto->local);
            $this->session->set_flashdata('erro', '<p>Não foi possível inserir este registro</p>');
        }
        else{
         $this->session->set_flashdata('sucesso', '<b>Registro</b> e <b>Arquivo</b> foram inseridos com sucesso');
     }
     redirect(base_url('portifolio'), 'location');
 }

 public function editar() {
    $objeto = $this->Portifolio_m->get_object($this->input->post('id'));
    $objeto->id = $this->input->post('id');
    $objeto->titulo = $this->input->post('titulo');
    $objeto->descricao = $this->input->post('descricao');
    $objeto->portifolio = $this->input->post('portifolio');
    $objeto->item = $this->input->post('item');
    $objeto->alt = $this->input->post('alt');

    //Verificar se foi enviado um arquivo
    if (!empty($_FILES['local']['name'])) {
        //Faço o upload enviando a pasta destino
        $upload = $this->do_upload($objeto->portifolio,$objeto->item);
        //Se não fizer upload, retorna para a página com erro
        if(!empty($upload['error'])){ 
            $this->session->set_flashdata('erro', $upload['error']);
            redirect(base_url('portifolio'), 'location');
        }
        //Excluir o arquivo da pasta
        $server_path = str_ireplace('\\','/',getcwd());
        unlink($server_path.$objeto->local);//DELETA O ARQUIVO DA PASTA
        //Troco as barras do endereço do servidor com barras invertidas. Ex: C:\xampp\web
        $server_path = str_ireplace('\\','/',getcwd());
        //Retiro o endereço do servidor para armazenar somente minha estrutura de pastas
        $path = str_ireplace($server_path,'',$upload['upload_data']['full_path']);
        $objeto->local = $path; //variável somente com minha estrutura de pasta
    }

    //Se ocorrer um erro no db, retiro o arquivo inserido da pasta
    if (empty($this->Portifolio_m->editar($objeto))) {
        unlink($objeto->local);
        $this->session->set_flashdata('erro', '<p>Não foi possível editar este registro</p>');
    }
    else{
       $this->session->set_flashdata('sucesso', '<b>Registro</b> e <b>Arquivo</b> foram editados com sucesso');
   }
   redirect(base_url('portifolio'), 'location');
}

public function deletar() {
    $id = $this->uri->segment(3);
    $objeto = $this->Portifolio_m->get_object($id);
    $server_path = str_ireplace('\\','/',getcwd());
    //SE DELETAR O ARQUIVO DA PASTA, EXCLUO O REGISTRO NA TABELA
    if ($this->Portifolio_m->deletar($id)) {
        $this->session->set_flashdata('sucesso', '<b>Registro</b> excuido com sucesso');
        //Excluo o arquivo da pasta
        if(unlink($server_path.$objeto->local)){
            $this->session->set_flashdata('sucesso', '<b>Registro</b> e <b>Arquivo</b> foram excuidos com sucesso');
        }
    }else{
        $this->session->set_flashdata('erro', '<p>O registro não foi excuido!</p>');
    }
    redirect(base_url('portifolio'), 'location');
}
//Upload de arquivos
public function do_upload($portifolio,$item){
    $config['upload_path'] = 'assets/img/uploads/'.$portifolio.'/'.$item.'/';
    $config['allowed_types'] = 'gif|jpg|png';
    $config['max_size'] = 10000;
    //$config['max_width'] = 1024;
    //$config['max_height'] = 768;
    $this->load->library('upload', $config);
        if ( ! $this->upload->do_upload('local')){ //Se o arquio NÂO for para a pasta
            $error = array('error' => $this->upload->display_errors());
            return $error; //array com erro
        }
        else{ //Se for para a pasta
            $data = array('upload_data' => $this->upload->data());//dados do arquivo inserido na pasta
            return $data; //array com os dados do arquivo
        }
    }
}
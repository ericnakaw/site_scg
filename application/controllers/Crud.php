<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Crud extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Crud_m');
        $this->load->helper(array('form', 'url'));
        $this->load->helper("file");
        init_layout();
        set_layout('titulo', 'Crud', FALSE);
    }

    public function index() {
        $data['titulo_painel'] = 'Crud';
        $data['crud'] = $this->Crud_m->get_object_list();
        set_layout('conteudo', load_content('crud/lista', $data));
        load_layout();
    }

    public function form() {
        $id = $this->uri->segment(3);
        if (empty($id)) {
            $data['acao'] = 'inserir';
            $data['titulo_painel'] = 'Inserir Crud';
        } else {
            $objeto = $this->Crud_m->get_object($id);
            $data['crud'] = $objeto;
            $data['acao'] = 'editar';
            $data['titulo_painel'] = 'Editar Crud';
        }
        set_layout('conteudo', load_content('crud/form', $data));
        load_layout();
    }

    public function inserir() {
        $upload = $this->do_upload($this->input->post('portifolio'),$this->input->post('item'));
        if(!empty($upload['error'])){
            $this->session->set_flashdata('erro', $upload['error']);
            redirect(base_url('crud/form'), 'location');
        }

        $server_path = str_replace('\\','/',getcwd());
        $path = str_replace($server_path,'',$upload['upload_data']['file_path'].$_FILES['local']['name']);


        $objeto = new Crud_m();
        $objeto->id = null;
        $objeto->local = $path; 
        $objeto->titulo = $this->input->post('titulo');
        $objeto->descricao = $this->input->post('descricao');
        $objeto->portifolio = $this->input->post('portifolio');
        $objeto->item = $this->input->post('item');
        
        $id = $this->Crud_m->inserir($objeto);

        if (empty($id)) {
            unlink($objeto->local);
            $this->session->set_flashdata('erro', '<p>Não foi possível inserir este registro</p>');
        }
        else{
           $this->session->set_flashdata('sucesso', '<b>Registro</b> e <b>Arquivo</b> foram inseridos com sucesso');
       }
       redirect(base_url('crud'), 'location');
   }

   public function editar() {
    $objeto = $this->Crud_m->get_object($this->input->post('id'));
    $objeto->id = $this->input->post('id');
    $objeto->titulo = $this->input->post('titulo');
    $objeto->descricao = $this->input->post('descricao');
    $objeto->portifolio = $this->input->post('portifolio');
    $objeto->item = $this->input->post('item');

    if (!empty($_FILES['local']['name'])) {
            //Verificar se foi enviado um arquivo
        $upload = $this->do_upload($objeto->portifolio,$objeto->item);
            if(!empty($upload['error'])){ //Se não fizer upload, retorna para a página com erro
                $this->session->set_flashdata('erro', $upload['error']);
                redirect(base_url('crud'), 'location');
            }
            //Excluir o arquivo da pasta
            $server_path = str_replace('\\','/',getcwd());
        unlink($server_path.$objeto->local);//DELETA O ARQUIVO DA PASTA

        $server_path = str_replace('\\','/',getcwd());
        $path = str_replace($server_path,'',$upload['upload_data']['full_path']);
        $objeto->local = $path; 
    }

    if (empty($this->Crud_m->editar($objeto))) {
        unlink($objeto->local);
        $this->session->set_flashdata('erro', '<p>Não foi possível editar este registro</p>');
    }
    else{
     $this->session->set_flashdata('sucesso', '<b>Registro</b> e <b>Arquivo</b> foram editados com sucesso');
 }
 redirect(base_url('crud'), 'location');
}

public function deletar() {
    $id = $this->uri->segment(3);
    $objeto = $this->Crud_m->get_object($id);
    //SE DELETAR O ARQUIVO DA PASTA, EXCLUO O REGISTRO NA TABELA
    $server_path = str_replace('\\','/',getcwd());
    if ($this->Crud_m->deletar($id)) {
        $this->session->set_flashdata('sucesso', '<b>Registro</b> excuido com sucesso');
        if(unlink($server_path.$objeto->local)){
            $this->session->set_flashdata('sucesso', '<b>Registro</b> e <b>Arquivo</b> foram excuidos com sucesso');
        }
    }else{
        $this->session->set_flashdata('erro', '<p>O registro não foi excuido!</p>');
    }
    redirect(base_url('crud'), 'location');
}
public function do_upload($portifolio,$item){
    $config['upload_path'] = 'assets/img/uploads/'.$portifolio.'/'.$item.'/';
    $config['allowed_types'] = 'gif|jpg|png';
    $config['max_size'] = 20048;
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
<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Crud extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Crud_m');
        $this->load->helper(array('form', 'url'));
        init_layout();
        set_layout('titulo', 'Crud', FALSE);
    }

    public function index() {
        $data['titulo_painel'] = 'Crud';
        $data['controller'] = 'crud';
        $data['crud'] = $this->Crud_m->get_list();
        set_layout('conteudo', load_content('crud/lista', $data));
        load_layout();
    }

    public function form() {
        $id = $this->uri->segment(3);
        if (empty($id)) {
            $data['acao'] = 'inserir';
            $data['titulo_painel'] = 'Inserir Crud';
        } else {
            $objeto = $this->Crud_m->get_list($id);
            $data['crud'] = $objeto[0];
            $data['acao'] = 'editar';
            $data['titulo_painel'] = 'Editar Crud';
            $data['id'] = $id;
        }
        set_layout('conteudo', load_content('crud/form', $data));
        load_layout();
    }
    
    public function inserir() {
        $config['upload_path'] = 'assets/img/uploads/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = 2048;
        $config['max_width'] = 1024;
        $config['max_height'] = 768;
        $this->load->library('upload', $config);


        //FAZER O INSERT PRIMEIRO, DEPOIS FAZER O UPLOAD. CASO O INSERT DER CERTO E O UPLOAD ERRADO,
        //DELETO O REGISTRO

        if ( ! $this->upload->do_upload('local'))
        {  
            $error = array('error' => $this->upload->display_errors());
            $this->session->set_flashdata('erro', $error['error']);
            redirect(base_url('crud'), 'location');
        }
        else
        {
            $objeto = new Crud_m();
            $objeto->id = null;
            $objeto->local = $this->upload->data('file_path').$_FILES["local"]["name"];
            //dados do arquivo inserido na pasta  
            $data = array('upload_data' => $this->upload->data());
            var_dump($data);
            die();
            $id = $this->Crud_m->inserir($objeto);
            redirect(base_url('crud'), 'location');
        }
    }
    
    public function editar() {
        $config['upload_path'] = 'assets/img/uploads/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = 2048;
        $config['max_width'] = 1024;
        $config['max_height'] = 768;
        $this->load->library('upload', $config);

        //FAZER O EDITAR PRIMEIRO, DEPOIS FAZER O UPLOAD. CASO O EDITAR DER CERTO E O UPLOAD ERRADO,
        //DELETO O REGISTRO E DELETO O ARQUIVO

        if ( ! $this->upload->do_upload('local'))
        {  
            $error = array('error' => $this->upload->display_errors());
            $this->session->set_flashdata('erro', $error['error']);
            redirect(base_url('crud'), 'location');
        }
        else
        {
            $objeto = new Crud_m();
            $objeto->id = $this->input->post('id');
            $objeto->local = $this->upload->data('file_path').$_FILES["local"]["name"];  
            //dados do arquivo inserido na pasta
            $data = array('upload_data' => $this->upload->data());
            $id = $this->Crud_m->editar($objeto);
            redirect(base_url('crud'), 'location');
        }
    }
    
    public function deletar() {
        $id = $this->uri->segment(3);
        $this->Crud_m->deletar($id);
        //DELETAR O ARQUIVO DA PASTA
        redirect(base_url('crud'), 'location');
    }

}
<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Ajax extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        
    }

    public function form_contato() {
        $para = "fellipe6900@gmail.com";
        $assunto = "Formulario de Contato do Site";

        $menssagem = "<br>Nome: " . $this->input->post('nome');
        $menssagem.= "<br>Email: ". $this->input->post('email');
        $menssagem.= "<br>Telefone: ". $this->input->post('telefone');
        $menssagem.= "<br>Evento: ". $this->input->post('evento');
        $menssagem.= "<br>Data do evento: ". $this->input->post('data');
        $menssagem.= "<br>Menssagem: ". $this->input->post('mensagem');

        if (enviar_email($para, $assunto, $menssagem)) {
            print json_encode($this->input->post());
        } else {
            print '';
        }
    }

}

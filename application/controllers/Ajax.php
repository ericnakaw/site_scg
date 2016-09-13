<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Ajax extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        
    }

    public function form_contato() {
        $para = "ericnakaw@hotmail.com";
        $assunto = "Formulario de Contato do Site";

        $mensagem = "<hr><br>Nome: " . $this->input->post('nome');
        $mensagem.= "<br>Email: ". $this->input->post('email');
        $mensagem.= "<br>Telefone: ". $this->input->post('telefone');
        $mensagem.= "<br>Evento: ". $this->input->post('evento');
        $mensagem.= "<br>Data do evento: ". date("d/m/Y", strtotime($this->input->post('data')));
        $mensagem.= "<br>Menssagem: ". $this->input->post('mensagem');
        $mensagem.= "<hr>";

        if (enviar_email($para, $assunto, $mensagem)) {
            print "True";
        } else {
            print "False";
        }
    }

}

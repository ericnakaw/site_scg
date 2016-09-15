<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Ajax extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        
    }

    public function form_contato() {
        $para = "news@camilagolin.com.br";
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

    public function get_imagens() {
        $this->load->helper('file');
        $data = get_filenames('assets/img/portifolio/casamento/',true);

        foreach ($data as $key => $value) {
            
            $data2 = str_replace('C:\xampp\htdocs\site_scg', base_url(), $value);
            $card["title"] = "Teste";
            $card["img"] = str_replace('\\', '/', $data2);
            $card["text"] = "meu texto";
            $view_data[] = $card;

        }


        print json_encode($view_data);
        //set_layout('conteudo', load_conteudo('home/file',$view_data));
        //load_layout();
    }

}

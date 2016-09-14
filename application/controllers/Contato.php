<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contato extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('email');
        $this->load->library('email');
        init_layout();
    }

    public function index() {
        set_layout('titulo', 'Contato', FALSE);
        set_layout('conteudo', load_conteudo('contato/index'));
        set_layout('template', 'default');
        load_layout();
    }

    public function email5(){
        $this->load->library('email');
        $config['protocol'] = 'smtp';
        $config['smtp_host'] = 'ssl://mail.camilagolin.com.br';
        $config['smtp_port'] = '587';
        $config['smtp_timeout'] = '7';
        $config['smtp_user'] = 'news@camilagolin.com.br';
        $config['smtp_pass'] = '123camila';
        $config['charset'] = 'utf-8';
        $config['newline'] = "\r\n";
        $config['mailtype'] = 'text'; // or html
        $config['validation'] = TRUE; // bool whether to validate email or not      

        $this->email->initialize($config);

        $this->email->from('news@camilagolin.com.br', 'myname');
        $this->email->to('ericnakaw@hotmail.com');

        $this->email->subject('Email Test');
        $this->email->message('Testing the email class.');
        echo $this->email->print_debugger();
        if ($this->email->send()) {
            return TRUE;
        }else{
            echo $this->email->print_debugger();
            return FALSE;
        }
        //print $this->email->print_debugger();
    }
    public function email_php()
    {
        $para = "ericnakaw@hotmail.com";
        $assunto = "Formulario de Contato do Site";

        $mensagem = "<hr><br>Nome: " . $this->input->post('nome');
        $mensagem.= "<br>Email: ". $this->input->post('email');
        $mensagem.= "<br>Telefone: ". $this->input->post('telefone');
        $mensagem.= "<br>Evento: ". $this->input->post('evento');
        $mensagem.= "<br>Data do evento: ". $this->input->post('data');
        $mensagem.= "<br>Menssagem: ". $this->input->post('mensagem');
        $mensagem.= "<hr>";

        print($para."<br>");
        print($assunto."<br>");
        print($mensagem."<br>");

        $this->load->library('email');

        $this->email->from('news@camilagolin.com.br', 'Contato Site');
        $this->email->to($para);
        $this->email->cc('');
        $this->email->bcc('');
        
        $this->email->subject($assunto);
        $this->email->message($mensagem);
        
        var_dump($this->email->send());
        
        die();
    }

}

/* End of file Contato.php */
/* Location: ./application/controllers/Contato.php */

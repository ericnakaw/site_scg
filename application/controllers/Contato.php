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
        carregar_layout();
    }

    public function email5(){
        $this->load->library('email');
        $config['protocol'] = 'smtp';
        $config['smtp_host'] = 'ssl://smtp.gmail.com';
        $config['smtp_port'] = '465';
        $config['smtp_timeout'] = '7';
        $config['smtp_user'] = 'meuEmail@gmail.com';
        $config['smtp_pass'] = 'minhaSenha';
        $config['charset'] = 'utf-8';
        $config['newline'] = "\r\n";
        $config['mailtype'] = 'text'; // or html
        $config['validation'] = TRUE; // bool whether to validate email or not      

        $this->email->initialize($config);

        $this->email->from('email@gmail.com', 'myname');
        $this->email->to('email@hotmail.com');

        $this->email->subject('Email Test');
        $this->email->message('Testing the email class.');

        if ($this->email->send()) {
            return TRUE;
        }else{
            return FALSE;
        }
        //print $this->email->print_debugger();
    }

}

/* End of file Contato.php */
/* Location: ./application/controllers/Contato.php */

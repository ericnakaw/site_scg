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
    public function email(){
        /*
        $recipient (string) – E-mail address
        $subject (string) – Mail subject
        $message (string) – Message body
        */
        $email = 'ericnakaw@hotmail.com';
        $subject = 'Envio teste';
        $message = 'Testanto o envio de emails pelo codeigniter';
        if (valid_email($email))
        {
            echo 'email is valid';
        }
        else
        {
            echo 'email is not valid';
        }
        filter_var($email, FILTER_VALIDATE_EMAIL);
        mail($email, $subject, $message);
    }
    public function email2(){
        //$this->email->initialize($config);
        //$this->load->library('email');
        $this->email->from('eric@ericnakawatase.esy.es', 'Eric Gmail');
        $this->email->to('ericnakaw@hotmail.com');
        $this->email->cc('');
        $this->email->bcc('');

        $this->email->subject('Email Test');
        $this->email->message('Testing the email class.');

        var_dump($this->email->send());
    }
    public function email3(){
        $ci = get_instance();
        $ci->load->library('email');
        $config['protocol'] = "smtp";
        $config['smtp_host'] = "mx1.hostinger.com.br";
        $config['smtp_port'] = "110";
        $config['smtp_user'] = "eric@ericnakawatase.esy.es"; 
        $config['smtp_pass'] = "eric1234";
        $config['charset'] = "utf-8";
        $config['mailtype'] = "html";
        $config['newline'] = "\r\n";

        $ci->email->initialize($config);

        $ci->email->from('eric@ericnakawatase.esy.es', 'Blabla');
        $list = array('ericnakaw@gmail.com');
        $ci->email->to($list);
        $this->email->reply_to('eric@ericnakawatase.esy.es', 'Explendid Videos');
        $ci->email->subject('This is an email test');
        $ci->email->message('It is working. Great!');
        var_dump($ci->email->send());
    }
    public function email4(){
        $this->load->library('email');

        $this->email->from('ericnakaw@gmail.com', 'Seu Nome');
        $this->email->to('ericnakaw@gmail.com'); 
        $this->email->cc(''); 
        $this->email->bcc(''); 

        $this->email->subject('Teste de Email');
        $this->email->message('Testando a classe de email.');   

        $this->email->send();

        echo $this->email->print_debugger();
    }
    public function email5(){
        $this->load->library('email');
        $config['protocol'] = 'smtp';
        $config['smtp_host'] = 'ssl://smtp.gmail.com';
        $config['smtp_port'] = '465';
        $config['smtp_timeout'] = '7';
        $config['smtp_user'] = 'ericnakaw@gmail.com';
        $config['smtp_pass'] = '19820420EaricGmail09';
        $config['charset'] = 'utf-8';
        $config['newline'] = "\r\n";
        $config['mailtype'] = 'text'; // or html
        $config['validation'] = TRUE; // bool whether to validate email or not      

        $this->email->initialize($config);

        $this->email->from('ericnakaw@gmail.com', 'myname');
        $this->email->to('ericnakaw@gmail.com');

        $this->email->subject('Email Test');
        $this->email->message('Testing the email class.');

        var_dump($this->email->send());

        print $this->email->print_debugger();
    }

}

/* End of file Contato.php */
/* Location: ./application/controllers/Contato.php */

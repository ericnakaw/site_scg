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
        set_layout('conteudo', load_content('contato/index'));
        set_layout('template', 'default');
        load_layout();
    }

    public function email(){
        $this->load->library('email');
        $this->email->initialize($config);

        //montagem da mensagem
        $mensagem = "<hr><br>Nome: " . $this->input->post('nome');
        $mensagem.= "<br>Email: ". $this->input->post('email');
        $mensagem.= "<br>Telefone: ". $this->input->post('telefone');
        $mensagem.= "<br>Evento: ". $this->input->post('evento');
        $mensagem.= "<br>Data do evento: ". date("d/m/Y", strtotime($this->input->post('data')));
        $mensagem.= "<br>Mensagem: ". $this->input->post('mensagem');
        $mensagem.= "<hr>";

        $this->email->from('news@camilagolin.com.br', 'Site Camila Golin');
        $this->email->to('news@camilagolin.com.br');

        $this->email->subject('Contato pelo site: '.$this->input->post('evento'));
        $this->email->message($mensagem);
        if ($this->email->send()) {
            print "True";
        }else{
            print "False";
        }
        //ATENÇÃO: esta ação esta sendo feita via ajax, não redirecione
        //redirect('contato','auto');
    }

}

/* End of file Contato.php */
/* Location: ./application/controllers/Contato.php */

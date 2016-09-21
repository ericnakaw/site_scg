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
        $this->form_validation->set_rules('nome', 'NOME', 'required');
        $this->form_validation->set_rules('email', 'EMAIL', 'required|strtolower|valid_email');
        $this->form_validation->set_rules('evento', 'EVENTO', 'required');
        $this->form_validation->set_rules('mensagem', 'MENSAGEM', 'required');
        $result = array(
            'status' =>'',
            'msg' => ''
            );

        $this->output->set_content_type('application/json');
        if ($this->form_validation->run() == FALSE)
        {
            $error = array(
                'nome' => form_error('nome'),
                'email' => form_error('email'),
                'evento' => form_error('evento'),
                'mensagem' => form_error('mensagem'),
                );
            $result['status'] = 'error_validation';
            $result['msg'] = $error;
            echo json_encode($result);
            die();
        }
        else
        {
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
                $result['status'] = 'success';
                echo json_encode($result);
            }else{
                $result['status'] = 'error';
                $result['msg'] = 'Erro ao enviar o email.';
                echo json_encode($result);
            }
        }
        //ATENÇÃO: esta ação esta sendo feita via ajax, não redirecione
        //redirect('contato','auto');
    }

}

/* End of file Contato.php */
/* Location: ./application/controllers/Contato.php */

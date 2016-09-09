<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contato extends CI_Controller {

    public function __construct() {
        parent::__construct();
        init_layout();
    }

    public function index() {
        set_layout('titulo', 'Contato', FALSE);
        set_layout('conteudo', load_conteudo('contato/index'));
        set_layout('template', 'default');
        carregar_layout();
    }

}

/* End of file Contato.php */
/* Location: ./application/controllers/Contato.php */

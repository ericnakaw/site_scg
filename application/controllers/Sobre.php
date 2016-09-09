<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sobre extends CI_Controller {

    public function __construct() {
        parent::__construct();
        init_layout();
    }

    public function index() {
        set_layout('titulo', 'Sobre', FALSE);
        set_layout('conteudo', load_conteudo('sobre/index'));
        set_layout('template', 'default');
        carregar_layout();
    }

}

/* End of file Sobre.php */
/* Location: ./application/controllers/Sobre.php */

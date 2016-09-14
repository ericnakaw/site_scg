<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Localizacao extends CI_Controller {

    public function __construct() {
        parent::__construct();
        init_layout();
    }

    public function index() {
        set_layout('titulo', 'Localizacao', FALSE);
        set_layout('conteudo', load_conteudo('localizacao/index'));
        set_layout('template', 'default');
        load_layout();
    }

}

/* End of file Localizacao.php */
/* Location: ./application/controllers/Localizacao.php */

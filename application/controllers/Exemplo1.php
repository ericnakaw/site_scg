<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Exemplo1 extends CI_Controller {

    public function __construct() {
        parent::__construct();
        init_layout();
    }

    public function index() {
        set_layout('titulo', 'Meu Titulo', FALSE);
        set_layout('conteudo', load_conteudo('home/index'));
        set_layout('template', 'default');
        carregar_layout();
    }

}

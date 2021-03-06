<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct() {
        parent::__construct();
        init_layout();
    }

    public function index() {
        set_layout('titulo', 'Home', FALSE);
        set_layout('conteudo', load_content('home/index'));
        set_layout('template', 'default');
        load_layout();
    }
}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */
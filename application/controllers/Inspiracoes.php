<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inspiracoes extends CI_Controller {

	public function __construct() {
		parent::__construct();
		init_layout();
	}

	public function index() {
		set_layout('titulo', 'Inspiracoes', FALSE);
		set_layout('conteudo', load_content('inspiracoes/index'));
		set_layout('template', 'default');
		load_layout();
	}

}

/* End of file Inspiracoes.php */
/* Location: ./application/controllers/Inspiracoes.php */
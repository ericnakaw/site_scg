<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Comocomprar extends CI_Controller {

	public function __construct() {
		parent::__construct();
		init_layout();
	}

	public function index() {
		set_layout('titulo', 'Como comprar', FALSE);
		set_layout('conteudo', load_content('comocomprar/index'));
		set_layout('template', 'default');
		load_layout();
	}

}

/* End of file Comocomprar.php */
/* Location: ./application/controllers/comocomprar.php */
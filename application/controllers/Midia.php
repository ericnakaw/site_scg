<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Midia extends CI_Controller {

	public function __construct() {
		parent::__construct();
		init_layout();
	}

	public function index() {
		set_layout('titulo', 'Na Mídia', FALSE);
		set_layout('conteudo', load_content('midia/index'));
		set_layout('template', 'default');
		load_layout();
	}

}

/* End of file Midia.php */
/* Location: ./application/controllers/midia.php */
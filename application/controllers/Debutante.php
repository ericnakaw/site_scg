<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Debutante extends CI_Controller {

	public function __construct(){
		parent::__construct();
		init_layout();
	}
	public function index(){
		print 'Em construção..........';
		print anchor('home', 'Voltar');
		die();
		set_layout('titulo', 'Convite', FALSE);
        set_layout('conteudo', load_content('debutante/index'));
        set_layout('template', 'default');
        load_layout();
	}

}

/* End of file Convite.php */
/* Location: ./application/controllers/Convite.php */
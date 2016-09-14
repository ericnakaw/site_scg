<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Debutante extends CI_Controller {

	public function __construct(){
		parent::__construct();
		init_layout();
	}
	public function index(){
		print 'Em construção';
		die();
		set_layout('titulo', 'Convite', FALSE);
        set_layout('conteudo', load_conteudo('debutante/index'));
        set_layout('template', 'default');
        load_layout();
	}
	public function convite(){
		set_layout('titulo', 'Convite', FALSE);
        set_layout('conteudo', load_conteudo('debutante/convite'));
        set_layout('template', 'default');
        load_layout();
	}
	public function lembrança(){
		set_layout('titulo', 'Lembrança', FALSE);
        set_layout('conteudo', load_conteudo('debutante/lembrança'));
        set_layout('template', 'default');
        load_layout();
	}
	public function acessorio(){
		set_layout('titulo', 'Acessorio', FALSE);
        set_layout('conteudo', load_conteudo('debutante/acessorio'));
        set_layout('template', 'default');
        load_layout();
	}

}

/* End of file Convite.php */
/* Location: ./application/controllers/Convite.php */
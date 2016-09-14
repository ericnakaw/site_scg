<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Convite extends CI_Controller {

	public function __construct(){
		parent::__construct();
		init_layout();
	}
	public function index(){
		set_layout('titulo', 'Convite', FALSE);
        set_layout('conteudo', load_conteudo('convite/index'));
        set_layout('template', 'default');
        load_layout();
	}
	public function casamento(){
		set_layout('titulo', 'Convite', FALSE);
        set_layout('conteudo', load_conteudo('convite/casamento'));
        set_layout('template', 'default');
        load_layout();
	}
	public function galeria(){
		set_layout('titulo', 'Convite', FALSE);
        set_layout('conteudo', load_conteudo('convite/galeria'));
        set_layout('template', 'default');
        load_layout();
	}

}

/* End of file Convite.php */
/* Location: ./application/controllers/Convite.php */
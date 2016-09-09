<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lembranca extends CI_Controller {

	public function __construct(){
		parent::__construct();
		init_layout();
	}
	public function index(){
		set_layout('titulo', 'Lembranças', FALSE);
        set_layout('conteudo', load_conteudo('lembranca/index'));
        set_layout('template', 'default');
        carregar_layout();
	}

}

/* End of file Lembranca.php */
/* Location: ./application/controllers/Lembranca.php */
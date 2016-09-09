<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Acessorio extends CI_Controller {

	public function __construct(){
		parent::__construct();
		init_layout();
	}
	public function index(){
		set_layout('titulo', 'Acessorio', FALSE);
        set_layout('conteudo', load_conteudo('acessorio/index'));
        set_layout('template', 'default');
        carregar_layout();
	}

}

/* End of file Acessorio.php */
/* Location: ./application/controllers/Acessorio.php */
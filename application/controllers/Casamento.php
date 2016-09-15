<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Casamento extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Crud_m');
		init_layout();
	}
	public function index(){
		set_layout('titulo', 'Convite', FALSE);
        set_layout('conteudo', load_conteudo('casamento/index'));
        set_layout('template', 'default');
        load_layout();
	}
	public function convite(){
		set_layout('titulo', 'Convite', FALSE);
		//teste

		$data['crud'] = $this->Crud_m->get_by_portifolio_item('casamento','convite');
		//var_dump($data['crud']);
		//die();

		//teste
        set_layout('conteudo', load_content('casamento/convite',$data));
        set_layout('template', 'default');
        load_layout();
	}
	public function lembrança(){
		set_layout('titulo', 'Lembrança', FALSE);
        set_layout('conteudo', load_conteudo('casamento/lembrança'));
        set_layout('template', 'default');
        load_layout();
	}
	public function acessorio(){
		set_layout('titulo', 'Acessorio', FALSE);
        set_layout('conteudo', load_conteudo('casamento/acessorio'));
        set_layout('template', 'default');
        load_layout();
	}

}

/* End of file Convite.php */
/* Location: ./application/controllers/Convite.php */
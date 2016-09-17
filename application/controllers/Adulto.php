<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Adulto extends CI_Controller {

	public function __construct(){
		parent::__construct();
		init_layout();
	}

	public function index()
	{
		print 'Em construção..........';
		print anchor('home', 'Voltar');
		die();
	}


}

/* End of file Adulto.php */
/* Location: ./application/controllers/Adulto.php */
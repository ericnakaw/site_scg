<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Corporativo extends CI_Controller {

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

/* End of file Corporativo.php */
/* Location: ./application/controllers/Corporativo.php */
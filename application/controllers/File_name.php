<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class File_name extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Portifolio_m');
	}

	public function index()
	{

		$path    = 'C:\Users\Eric\Desktop\Convites\JPEG';
		$files = array_diff(scandir($path), array('.', '..','Thumbs.db'));

		foreach ($files as $file) {
			$sql = "INSERT INTO `portifolio` (`id`, `titulo`, `descricao`, `portifolio`, `item`, `alt`, `local`) VALUES (NULL, 'Convite', 'Convite de casamento', 'casamento', 'convite', 'convite', '/assets/img/uploads/casamento/convite/{$file}');";
			$this->db->query($sql);
		}



	}

}

/* End of file File_name.php */
/* Location: ./application/controllers/File_name.php */
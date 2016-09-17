<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Multi_upload extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Portifolio_m');
	}

	public function index()
	{

		$path    = 'C:\Users\Eric\Desktop\UPLOADS\Lembrancas\JPEG';
		$files = array_diff(scandir($path), array('.', '..','Thumbs.db'));

		foreach ($files as $file) {
			$sql = "INSERT INTO `portifolio` (`id`, `titulo`, `descricao`, `portifolio`, `item`, `alt`, `local`) 
			VALUES (NULL, 'Convite', 'Lembranca', 'casamento', 'lembranca', 'lembranca', '/assets/img/uploads/casamento/lembranca/{$file}');";
			$this->db->query($sql);
		}
	}
}

/* End of file Multi_upload.php */
/* Location: ./application/controllers/Multi_upload.php */
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Casamento extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Portifolio_m');
		$this->load->library('pagination');
		init_layout();
	}
	public function index(){
		set_layout('titulo', 'Convite', FALSE);
		set_layout('conteudo', load_conteudo('casamento/index'));
		set_layout('template', 'default');
		load_layout();
	}
	public function convite(){
		
		//pagination settings
		$config['base_url'] = site_url('casamento/convite');
		$config['total_rows'] = $this->Portifolio_m->get_num_rows('casamento','convite');
		$config['per_page'] = "48";
		$config["uri_segment"] = 3;
		$choice = $config["total_rows"] / $config["per_page"];
		$config["num_links"] = floor($choice);

        //config for bootstrap pagination class integration
		$config['full_tag_open'] = '<ul class="pagination">';
		$config['full_tag_close'] = '</ul>';
		$config['first_link'] = false;
		$config['last_link'] = false;
		$config['first_tag_open'] = '<li>';
		$config['first_tag_close'] = '</li>';
		$config['prev_link'] = '&laquo';
		$config['prev_tag_open'] = '<li class="prev">';
		$config['prev_tag_close'] = '</li>';
		$config['next_link'] = '&raquo';
		$config['next_tag_open'] = '<li>';
		$config['next_tag_close'] = '</li>';
		$config['last_tag_open'] = '<li>';
		$config['last_tag_close'] = '</li>';
		$config['cur_tag_open'] = '<li class="active"><a href="#">';
		$config['cur_tag_close'] = '</a></li>';
		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';

		$this->pagination->initialize($config);
		$data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

        //call the model function to get the portifolio
		$portifolio = $this->Portifolio_m->get_by_portifolio_item('casamento','convite',$config["per_page"],$data['page']);
		$data['portifolio'] = $portifolio['portifolio'];
		$data['paginacao'] = $this->pagination->create_links();

		set_layout('titulo', 'Convite', FALSE);
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

application/controllers/File_name.php
application/controllers/Portifolio.php
application/models/Portifolio_m.php
application/views/portifolio/
assets/img/home/featurettes/
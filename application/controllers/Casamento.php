<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Casamento extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Portfolio_m');
		$this->load->library('pagination');
		init_layout();
	}
	public function index(){
		set_layout('titulo', 'Convite', FALSE);
		set_layout('conteudo', load_content('casamento/index'));
		set_layout('template', 'default');
		load_layout();
	}
	public function convite(){
		//pagination settings
		$config['base_url'] = site_url('casamento/convite');
		$config['total_rows'] = $this->Portfolio_m->get_num_rows('casamento','convite');
		$config['per_page'] = "48";
		$choice = $config["total_rows"] / $config["per_page"];
		$config["num_links"] = floor($choice);
		$this->pagination->initialize($config);
		$data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        //call the model function to get the portfolio
		$portfolio = $this->Portfolio_m->get_by_portfolio_item('casamento','convite',$config["per_page"],$data['page']);
		$data['portfolio'] = $portfolio['portfolio'];
		$data['paginacao'] = $this->pagination->create_links();
		$data['cabecalho'] = 'Convite';
        $data['galeria'] = 'Casamento';
		set_layout('titulo', 'Casamento / Convite', true);
		set_layout('conteudo', load_content('casamento/convite',$data));
		set_layout('template', 'default');
		load_layout();
	}
	public function lembranca(){
		//pagination settings
		$config['base_url'] = site_url('casamento/lembranca');
		$config['total_rows'] = $this->Portfolio_m->get_num_rows('casamento','lembranca');
		$config['per_page'] = "48";
		$choice = $config["total_rows"] / $config["per_page"];
		$config["num_links"] = floor($choice);
		$this->pagination->initialize($config);
		$data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        //call the model function to get the portfolio
		$portfolio = $this->Portfolio_m->get_by_portfolio_item('casamento','lembranca',$config["per_page"],$data['page']);
		$data['portfolio'] = $portfolio['portfolio'];
		$data['paginacao'] = $this->pagination->create_links();
		$data['cabecalho'] = 'Lembrança';
        $data['galeria'] = 'Casamento';
		set_layout('titulo', 'Casamento / Lembranca', true);
		set_layout('conteudo', load_content('casamento/lembranca',$data));
		set_layout('template', 'default');
		load_layout();
	}
	public function acessorio(){
		//pagination settings
		$config['base_url'] = site_url('casamento/acessorio');
		$config['total_rows'] = $this->Portfolio_m->get_num_rows('casamento','acessorio');
		$config['per_page'] = "48";
		$choice = $config["total_rows"] / $config["per_page"];
		$config["num_links"] = floor($choice);
		$this->pagination->initialize($config);
		$data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        //call the model function to get the portfolio
		$portfolio = $this->Portfolio_m->get_by_portfolio_item('casamento','acessorio',$config["per_page"],$data['page']);
		$data['portfolio'] = $portfolio['portfolio'];
		$data['paginacao'] = $this->pagination->create_links();
		$data['cabecalho'] = 'Acessório';
        $data['galeria'] = 'Casamento';
		set_layout('titulo', 'Casamento / Acessorio', true);
		set_layout('conteudo', load_content('casamento/acessorio',$data));
		set_layout('template', 'default');
		load_layout();
	}

}

/* End of file Convite.php */
/* Location: ./application/controllers/Convite.php */
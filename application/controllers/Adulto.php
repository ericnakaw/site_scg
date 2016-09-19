<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Adulto extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Portfolio_m');
        $this->load->library('pagination');
        init_layout();
    }

    public function index() {
        set_layout('conteudo', load_content('adulto/index'));
        load_layout();
    }

    public function convite() {
        //pagination settings
        $config['base_url'] = site_url('adulto/convite');
        $config['total_rows'] = $this->Portfolio_m->get_num_rows('adulto', 'convite');
        $config['per_page'] = "48";
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = floor($choice);
        $this->pagination->initialize($config);
        $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

        //call the model function to get the portfolio
        $portfolio = $this->Portfolio_m->get_by_portfolio_item('adulto', 'convite', $config["per_page"], $data['page']);
        $data['portfolio'] = $portfolio['portfolio'];
        $data['paginacao'] = $this->pagination->create_links();
        set_layout('titulo', 'Adulto / Convite', true);
        set_layout('conteudo', load_content('adulto/convite', $data));
        load_layout();
    }

    public function lembranca() {
        //pagination settings
        $config['base_url'] = site_url('adulto/lembranca');
        $config['total_rows'] = $this->Portfolio_m->get_num_rows('adulto', 'lembranca');
        $config['per_page'] = "48";
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = floor($choice);
        $this->pagination->initialize($config);
        $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

        //call the model function to get the portfolio
        $portfolio = $this->Portfolio_m->get_by_portfolio_item('adulto', 'lembranca', $config["per_page"], $data['page']);
        $data['portfolio'] = $portfolio['portfolio'];
        $data['paginacao'] = $this->pagination->create_links();

        set_layout('titulo', 'Adulto / Lembranca', true);
        set_layout('conteudo', load_content('adulto/lembranca', $data));
        load_layout();
    }

    public function acessorio() {
        //pagination settings
        $config['base_url'] = site_url('adulto/acessorio');
        $config['total_rows'] = $this->Portfolio_m->get_num_rows('adulto', 'acessorio');
        $config['per_page'] = "48";
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = floor($choice);
        $this->pagination->initialize($config);
        $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

        //call the model function to get the portfolio
        $portfolio = $this->Portfolio_m->get_by_portfolio_item('adulto', 'acessorio', $config["per_page"], $data['page']);
        $data['portfolio'] = $portfolio['portfolio'];
        $data['paginacao'] = $this->pagination->create_links();

        set_layout('titulo', 'Adulto / Acessorio', true);
        set_layout('conteudo', load_content('adulto/acessorio', $data));
        set_layout('template', 'default');
        load_layout();
    }

}

/* End of file Adulto.php */
/* Location: ./application/controllers/Adulto.php */
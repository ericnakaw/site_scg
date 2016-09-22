<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Infantil extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Portfolio_m');
        $this->load->library('pagination');
        init_layout();
    }

    public function index() {
        set_layout('conteudo', load_content('infantil/index'));
        load_layout();
    }

    public function convite() {
        //pagination settings
        $config['base_url'] = site_url('infantil/convite');
        $config['total_rows'] = $this->Portfolio_m->get_num_rows('infantil', 'convite');
        $config['per_page'] = "48";
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = floor($choice);
        $this->pagination->initialize($config);
        $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        //call the model function to get the portfolio
        $portfolio = $this->Portfolio_m->get_by_portfolio_item('infantil', 'convite', $config["per_page"], $data['page']);
        $data['portfolio'] = $portfolio['portfolio'];
        $data['paginacao'] = $this->pagination->create_links();
        $data['cabecalho'] = 'Convite';
        $data['galeria'] = 'Infantil';
        set_layout('titulo', 'Infantil / Convite', true);
        set_layout('conteudo', load_content('infantil/convite', $data));
        load_layout();
    }

    public function lembranca() {
        //pagination settings
        $config['base_url'] = site_url('infantil/lembranca');
        $config['total_rows'] = $this->Portfolio_m->get_num_rows('infantil', 'lembranca');
        $config['per_page'] = "48";
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = floor($choice);
        $this->pagination->initialize($config);
        $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        //call the model function to get the portfolio
        $portfolio = $this->Portfolio_m->get_by_portfolio_item('infantil', 'lembranca', $config["per_page"], $data['page']);
        $data['portfolio'] = $portfolio['portfolio'];
        $data['paginacao'] = $this->pagination->create_links();
        $data['cabecalho'] = 'Lembrança';
        $data['galeria'] = 'Infantil';
        set_layout('titulo', 'Infantil / Lembranca', true);
        set_layout('conteudo', load_content('infantil/lembranca', $data));
        load_layout();
    }

    public function acessorio() {
        //pagination settings
        $config['base_url'] = site_url('infantil/acessorio');
        $config['total_rows'] = $this->Portfolio_m->get_num_rows('infantil', 'acessorio');
        $config['per_page'] = "48";
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = floor($choice);
        $this->pagination->initialize($config);
        $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        //call the model function to get the portfolio
        $portfolio = $this->Portfolio_m->get_by_portfolio_item('infantil', 'acessorio', $config["per_page"], $data['page']);
        $data['portfolio'] = $portfolio['portfolio'];
        $data['paginacao'] = $this->pagination->create_links();
        $data['cabecalho'] = 'Acessório';
        $data['galeria'] = 'Infantil';
        set_layout('titulo', 'Infantil / Acessorio', true);
        set_layout('conteudo', load_content('infantil/acessorio', $data));
        set_layout('template', 'default');
        load_layout();
    }

}

/* End of file Infantil.php */
/* Location: ./application/controllers/Infantil.php */
<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Corporativo extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Portifolio_m');
        $this->load->library('pagination');
        init_layout();
    }

    public function index() {
        set_layout('conteudo', load_content('corporativo/index'));
        load_layout();
    }

    public function convite() {
        //pagination settings
        $config['base_url'] = site_url('corporativo/convite');
        $config['total_rows'] = $this->Portifolio_m->get_num_rows('corporativo', 'convite');
        $config['per_page'] = "48";
        $config["uri_segment"] = 3;
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = floor($choice);
        $this->pagination->initialize($config);
        $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

        //call the model function to get the portifolio
        $portifolio = $this->Portifolio_m->get_by_portifolio_item('corporativo', 'convite', $config["per_page"], $data['page']);
        $data['portifolio'] = $portifolio['portifolio'];
        $data['paginacao'] = $this->pagination->create_links();
        set_layout('titulo', 'Corporativo / Convite', true);
        set_layout('conteudo', load_content('corporativo/convite', $data));
        load_layout();
    }

    public function lembranca() {
        //pagination settings
        $config['base_url'] = site_url('corporativo/lembranca');
        $config['total_rows'] = $this->Portifolio_m->get_num_rows('corporativo', 'lembranca');
        $config['per_page'] = "48";
        $config["uri_segment"] = 3;
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = floor($choice);
        $this->pagination->initialize($config);
        $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

        //call the model function to get the portifolio
        $portifolio = $this->Portifolio_m->get_by_portifolio_item('corporativo', 'lembranca', $config["per_page"], $data['page']);
        $data['portifolio'] = $portifolio['portifolio'];
        $data['paginacao'] = $this->pagination->create_links();

        set_layout('titulo', 'Corporativo / Lembranca', true);
        set_layout('conteudo', load_content('corporativo/lembranca', $data));
        load_layout();
    }

    public function acessorio() {
        //pagination settings
        $config['base_url'] = site_url('corporativo/acessorio');
        $config['total_rows'] = $this->Portifolio_m->get_num_rows('corporativo', 'acessorio');
        $config['per_page'] = "48";
        $config["uri_segment"] = 3;
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = floor($choice);
        $this->pagination->initialize($config);
        $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

        //call the model function to get the portifolio
        $portifolio = $this->Portifolio_m->get_by_portifolio_item('corporativo', 'acessorio', $config["per_page"], $data['page']);
        $data['portifolio'] = $portifolio['portifolio'];
        $data['paginacao'] = $this->pagination->create_links();

        set_layout('titulo', 'Corporativo / Acessorio', true);
        set_layout('conteudo', load_content('corporativo/acessorio', $data));
        set_layout('template', 'default');
        load_layout();
    }

}

/* End of file Corporativo.php */
/* Location: ./application/controllers/Corporativo.php */
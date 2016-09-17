<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Debutante extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Portifolio_m');
        $this->load->library('pagination');
        init_layout();
        set_layout('titulo', '15 anos', FALSE);
    }

    public function index() {
        set_layout('conteudo', load_content('debutante/index'));
        load_layout();
    }

    public function convite() {
        //pagination settings
        $config['base_url'] = site_url('debutante/convite');
        $config['total_rows'] = $this->Portifolio_m->get_num_rows('debutante', 'convite');
        $config['per_page'] = "48";
        $config["uri_segment"] = 3;
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = floor($choice);
        $this->pagination->initialize($config);
        $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

        //call the model function to get the portifolio
        $portifolio = $this->Portifolio_m->get_by_portifolio_item('debutante', 'convite', $config["per_page"], $data['page']);
        $data['portifolio'] = $portifolio['portifolio'];
        $data['paginacao'] = $this->pagination->create_links();
        set_layout('titulo', 'Debutante / Convite', true);
        set_layout('conteudo', load_content('debutante/convite', $data));
        load_layout();
    }

    public function lembranca() {
        //pagination settings
        $config['base_url'] = site_url('debutante/lembranca');
        $config['total_rows'] = $this->Portifolio_m->get_num_rows('debutante', 'lembranca');
        $config['per_page'] = "48";
        $config["uri_segment"] = 3;
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = floor($choice);
        $this->pagination->initialize($config);
        $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

        //call the model function to get the portifolio
        $portifolio = $this->Portifolio_m->get_by_portifolio_item('debutante', 'lembranca', $config["per_page"], $data['page']);
        $data['portifolio'] = $portifolio['portifolio'];
        $data['paginacao'] = $this->pagination->create_links();

        set_layout('titulo', 'Debutante / Lembranca', true);
        set_layout('conteudo', load_content('debutante/lembranca', $data));
        load_layout();
    }

    public function acessorio() {
        //pagination settings
        $config['base_url'] = site_url('debutante/acessorio');
        $config['total_rows'] = $this->Portifolio_m->get_num_rows('debutante', 'acessorio');
        $config['per_page'] = "48";
        $config["uri_segment"] = 3;
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = floor($choice);
        $this->pagination->initialize($config);
        $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

        //call the model function to get the portifolio
        $portifolio = $this->Portifolio_m->get_by_portifolio_item('debutante', 'acessorio', $config["per_page"], $data['page']);
        $data['portifolio'] = $portifolio['portifolio'];
        $data['paginacao'] = $this->pagination->create_links();

        set_layout('titulo', 'Debutante / Acessorio', true);
        set_layout('conteudo', load_content('debutante/acessorio', $data));
        set_layout('template', 'default');
        load_layout();
    }

}

/* End of file Convite.php */
/* Location: ./application/controllers/Convite.php */
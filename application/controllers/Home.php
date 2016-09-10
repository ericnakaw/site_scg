<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct() {
        parent::__construct();
        init_layout();
    }

    public function index() {
        set_layout('titulo', 'Home', FALSE);
        set_layout('conteudo', load_conteudo('home/index'));
        set_layout('template', 'default');
        carregar_layout();
    }

    public function file() {
        $this->load->helper('file');
        $data = get_filenames('assets/img/portifolio/casamento/',true);

        foreach ($data as $key => $value) {
            
            $data2 = str_replace('C:\xampp\htdocs\site_scg', 'http://localhost/site_scg', $value);
            $card["title"] = "Teste";
            $card["img"] = str_replace('\\', '/', $data2);
            $card["text"] = "meu texto";
            $view_data[] = $card;

        }


        print json_encode($view_data);
        //set_layout('conteudo', load_conteudo('home/file',$view_data));
        //carregar_layout();
    }
}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */
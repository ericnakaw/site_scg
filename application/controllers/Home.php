<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct() {
        parent::__construct();
        init_layout();
    }

    public function index() {
        set_layout('titulo', 'Home', FALSE);
        set_layout('conteudo', load_content('home/index'));
        set_layout('template', 'default');
        load_layout();
    }
    public function index2() {
        set_layout('titulo', 'Home', FALSE);
        set_layout('conteudo', load_content('home/index2'));
        set_layout('template', 'default');
        load_layout();
    }

    public function file() {
        $this->load->helper('file');
        $data = get_filenames('assets/img/portifolio/casamento/',true);

        foreach ($data as $key => $value) {
            
            $data2 = str_replace('C:\xampp\htdocs\site_scg', base_url(), $value);
            $card["title"] = "Teste";
            $card["img"] = str_replace('\\', '/', $data2);
            $card["text"] = "meu texto";
            $view_data[] = $card;

        }


        print json_encode($view_data);
        //set_layout('conteudo', load_content('home/file',$view_data));
        //load_layout();
    }
}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */
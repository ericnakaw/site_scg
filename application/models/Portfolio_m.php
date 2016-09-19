<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Portfolio_m extends CI_Model {

    var $id;
    var $local;
    var $titulo;
    var $descricao;
    var $portfolio;
    var $item;
    var $alt;
    var $data_postagem;

    public function __construct() {
        parent::__construct();
    }

    public function get_object($id) {
        if (!empty($id)) {
            $this->db->where('id', $id);
            $this->db->limit(1);
            $result = $this->db->get('portfolio');
            $result = $this->Portfolio_m->_changeToObject($result->result_array());
            return $result[0];
        } else {
            return null;
        }
    }

    public function get_num_rows($portfolio,$item){
        $this->db->where(array('portfolio'=>$portfolio,'item'=>$item));
        $this->db->order_by("id", "desc");
        $result = $this->db->get('portfolio');
        return $result->num_rows();
    }

    //faz select somente com parametros do portfolio e item com limites
    public function get_by_portfolio_item($portfolio,$item,$start,$limit){
        $this->db->limit($start,$limit);
        $this->db->where(array('portfolio'=>$portfolio,'item'=>$item));
        $this->db->order_by("id", "desc");
        $result = $this->db->get('portfolio');
        $portfolio = array(
            'portfolio' => $this->Portfolio_m->_changeToObject($result->result_array()),
            'num_rows' => $result->num_rows()
            );
        return $portfolio;
    }

    public function get_object_list() {
        $result = $this->db->get('portfolio');
        return $this->Portfolio_m->_changeToObject($result->result_array());
    }

    public function inserir(Portfolio_m $objeto) {
        if (!empty($objeto)) {
            $dados = array(
                'id' => $objeto->id,
                'local' => $objeto->local,
                'titulo' => $objeto->titulo,
                'descricao' =>  $objeto->descricao,
                'portfolio' => $objeto->portfolio,
                'item'=> $objeto->item,
                'alt'=> $objeto->alt,
                'data_postagem'=> $objeto->data_postagem,
                );
            if ($this->db->insert('portfolio', $dados)) {
                return $this->db->insert_id();
            }
        }
        return false;
    }

    public function editar(Portfolio_m $objeto) {
        if (!empty($objeto->id)) {
            $dados = array(
                'id' => $objeto->id,
                'local' => $objeto->local,
                'titulo' => $objeto->titulo,
                'descricao' =>  $objeto->descricao,
                'portfolio' => $objeto->portfolio,
                'item'=> $objeto->item,
                'alt'=> $objeto->alt,
                'data_postagem'=> $objeto->data_postagem,
                );
            $this->db->where('id', $objeto->id);
            if ($this->db->update('portfolio', $dados)) {
                return true;
            }
        } 
        return false;

    }

    public function deletar($id) {
        if (!empty($id)) {
            $this->db->where('id', $id);
            if ($this->db->delete('portfolio')) {
                return true;
            } 
        } 
        return false;
    }

    function _changeToObject($result_db = '') {
        $object_lista = array();
        foreach ($result_db as $key => $value) {
            $object = new Portfolio_m();
            $object->id = $value['id'];
            $object->local = $value['local'];
            $object->titulo = $value['titulo'];
            $object->descricao = $value['descricao'];
            $object->portfolio = $value['portfolio'];
            $object->item = $value['item'];
            $object->alt = $value['alt'];
            $object->data_postagem = $value['data_postagem'];
            $object_lista[] = $object;
        }
        return $object_lista;
    }

    public function do_multiple_inserts(Portfolio_m $objeto,$from_path){
        $path    = $from_path; //'C:\Users\Eric\Desktop\UPLOADS\Lembrancas\JPEG'
        $files = array_diff(scandir($path), array('.', '..','Thumbs.db'));
        $dados;
        foreach ($files as $file) {

            $dados[] = array(
                "id" => null,
                "titulo" => $objeto->titulo,
                "descricao" => $objeto->descricao,
                "portfolio" => $objeto->portfolio,
                "item" => $objeto->item,
                "alt" => $objeto->alt,
                "data_postagem" => $objeto->data_postagem,
                "local" => "/assets/img/uploads/{$objeto->portfolio}/$objeto->item/{$file}"
                );
        }

        $this->db->trans_begin();

        $this->db->insert_batch("portfolio",$dados);

        if ($this->db->trans_status() === FALSE)
        {
            $this->db->trans_rollback();
            return false;
        }
        else
        {
            $this->db->trans_commit();
            return true;
        }
    }

}
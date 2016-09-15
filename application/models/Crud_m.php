<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Crud_m extends CI_Model {

    var $id;
    var $local;
    var $titulo;
    var $descricao;
    var $portifolio;
    var $item;

    public function __construct() {
        parent::__construct();
    }

    public function get_object($id) {
        if (!empty($id)) {
            $this->db->where('id', $id);
            $this->db->limit(1);
            $result = $this->db->get('crud');
            $result = $this->Crud_m->_changeToObject($result->result_array());
            return $result[0];
        } else {
            return null;
        }
    }

    public function get_by_portifolio_item($portifolio,$item){
        $this->db->where('portifolio',$portifolio);
        $result = $this->db->get('crud');
        return $this->Crud_m->_changeToObject($result->result_array());
    }

    public function get_object_list() {
        $result = $this->db->get('crud');
        return $this->Crud_m->_changeToObject($result->result_array());
    }

    public function inserir(Crud_m $objeto) {
        if (!empty($objeto)) {
            $dados = array(
                'id' => $objeto->id,
                'local' => $objeto->local,
                'titulo' => $objeto->titulo,
                'descricao' =>  $objeto->descricao,
                'portifolio' => $objeto->portifolio,
                'item'=> $objeto->item
                );
            if ($this->db->insert('crud', $dados)) {
                return $this->db->insert_id();
            }
        }
        return false;
    }

    public function editar(Crud_m $objeto) {
        if (!empty($objeto->id)) {
            $dados = array(
                'id' => $objeto->id,
                'local' => $objeto->local,
                'titulo' => $objeto->titulo,
                'descricao' =>  $objeto->descricao,
                'portifolio' => $objeto->portifolio,
                'item'=> $objeto->item
                );
            $this->db->where('id', $objeto->id);
            if ($this->db->update('crud', $dados)) {
                return true;
            }
        } 
        return false;

    }

    public function deletar($id) {
        if (!empty($id)) {
            $this->db->where('id', $id);
            if ($this->db->delete('crud')) {
                return true;
            } 
        } 
        return false;
    }

    function _changeToObject($result_db = '') {
        $object_lista = array();
        foreach ($result_db as $key => $value) {
            $object = new Crud_m();
            $object->id = $value['id'];
            $object->local = $value['local'];
            $object->titulo = $value['titulo'];
            $object->descricao = $value['descricao'];
            $object->portifolio = $value['portifolio'];
            $object->item = $value['item'];
            $object_lista[] = $object;
        }
        return $object_lista;
    }

}
<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Crud_m extends CI_Model {

    var $id;
    var $local;

    public function __construct() {
        parent::__construct();
    }

    public function get_list($id = '') {
        if (!empty($id)) {
            $this->db->where('id', $id);
            $this->db->limit(1);
            $result = $this->db->get('crud');
        } else {
            $result = $this->db->get('crud');
        }
        return $this->Crud_m->_changeToObject($result->result_array());
    }

    public function inserir(Crud_m $objeto) {
        if (!empty($objeto)) {
            $dados = array(
                 'id' => $objeto->id,
                'local' => $objeto->local,
            );
            if ($this->db->insert('crud', $dados)) {
                $this->session->set_flashdata('sucesso', 'Registro inserido com sucesso');
                return $this->db->insert_id();
            } else {
                $this->session->set_flashdata('erro', 'Não foi possível inserir este registro');
                return false;
            }
        } else {
            return false;
        }
    }

    public function editar(Crud_m $objeto) {
        if (!empty($objeto->id)) {
            $dados = array(
                'id' => $objeto->id,
                'local' => $objeto->local,
            );
            $this->db->where('id', $objeto->id);
            if ($this->db->update('crud', $dados)) {
                $this->session->set_flashdata('sucesso', 'Registro editado com sucesso');
                return true;
            }
        } else {
            $this->session->set_flashdata('erro', 'Não foi possível editar este registro');
            return false;
        }
    }

    public function deletar($id = '') {
        if (!empty($id)) {
            $this->db->where('id', $id);
            if ($this->db->delete('crud')) {
                $this->session->set_flashdata('sucesso', 'Registro excluido com sucesso');
                return true;
            } else {
                $this->session->set_flashdata('erro', 'Não foi possível excluir este registro');
                return false;
            }
        } else {
            return false;
        }
    }

    function _changeToObject($result_db = '') {
        $object_lista = array();
        foreach ($result_db as $key => $value) {
            $object = new Crud_m();
            $object->id = $value['id'];
            $object->local = $value['local'];
            $object_lista[] = $object;
        }
        return $object_lista;
    }

}
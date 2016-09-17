<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Portifolio_m extends CI_Model {

    var $id;
    var $local;
    var $titulo;
    var $descricao;
    var $portifolio;
    var $item;
    var $alt;

    public function __construct() {
        parent::__construct();
    }

    public function get_object($id) {
        if (!empty($id)) {
            $this->db->where('id', $id);
            $this->db->limit(1);
            $result = $this->db->get('portifolio');
            $result = $this->Portifolio_m->_changeToObject($result->result_array());
            return $result[0];
        } else {
            return null;
        }
    }

    public function get_num_rows($portifolio,$item){
        $this->db->where(array('portifolio'=>$portifolio,'item'=>$item));
        $this->db->order_by("id", "desc");
        $result = $this->db->get('portifolio');
        return $result->num_rows();
    }

    //faz select somente com parametros do portifolio e item com limites
    public function get_by_portifolio_item($portifolio,$item,$start,$limit){
        $this->db->limit($start,$limit);
        $this->db->where(array('portifolio'=>$portifolio,'item'=>$item));
        $this->db->order_by("id", "desc");
        $result = $this->db->get('portifolio');
        $portifolio = array(
            'portifolio' => $this->Portifolio_m->_changeToObject($result->result_array()),
            'num_rows' => $result->num_rows()
            );
        return $portifolio;
    }

    public function get_object_list() {
        $result = $this->db->get('portifolio');
        return $this->Portifolio_m->_changeToObject($result->result_array());
    }

    public function inserir(Portifolio_m $objeto) {
        if (!empty($objeto)) {
            $dados = array(
                'id' => $objeto->id,
                'local' => $objeto->local,
                'titulo' => $objeto->titulo,
                'descricao' =>  $objeto->descricao,
                'portifolio' => $objeto->portifolio,
                'item'=> $objeto->item,
                'alt'=> $objeto->alt,
                );
            if ($this->db->insert('portifolio', $dados)) {
                return $this->db->insert_id();
            }
        }
        return false;
    }

    public function editar(Portifolio_m $objeto) {
        if (!empty($objeto->id)) {
            $dados = array(
                'id' => $objeto->id,
                'local' => $objeto->local,
                'titulo' => $objeto->titulo,
                'descricao' =>  $objeto->descricao,
                'portifolio' => $objeto->portifolio,
                'item'=> $objeto->item,
                'alt'=> $objeto->alt,
                );
            $this->db->where('id', $objeto->id);
            if ($this->db->update('portifolio', $dados)) {
                return true;
            }
        } 
        return false;

    }

    public function deletar($id) {
        if (!empty($id)) {
            $this->db->where('id', $id);
            if ($this->db->delete('portifolio')) {
                return true;
            } 
        } 
        return false;
    }

    function _changeToObject($result_db = '') {
        $object_lista = array();
        foreach ($result_db as $key => $value) {
            $object = new Portifolio_m();
            $object->id = $value['id'];
            $object->local = $value['local'];
            $object->titulo = $value['titulo'];
            $object->descricao = $value['descricao'];
            $object->portifolio = $value['portifolio'];
            $object->item = $value['item'];
            $object->alt = $value['alt'];
            $object_lista[] = $object;
        }
        return $object_lista;
    }

    public function do_multiple_inserts(){
        $path    = 'C:\Users\Eric\Desktop\UPLOADS\Lembrancas\JPEG';
        $files = array_diff(scandir($path), array('.', '..','Thumbs.db'));

        foreach ($files as $file) {
            $sql = "INSERT INTO `portifolio` (`id`, `titulo`, `descricao`, `portifolio`, `item`, `alt`, `local`) 
            VALUES (NULL, 'Convite', 'Lembranca', 'casamento', 'lembranca', 'lembranca', '/assets/img/uploads/casamento/lembranca/{$file}');";
            $this->db->query($sql);
        }
    }

}
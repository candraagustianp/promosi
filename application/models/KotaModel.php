<?php

class KotaModel extends CI_Model {
    function get(){
        return $this->db->get('kota')->result_array();
    }

    function find($id) {
        return $this->db->where(['id' => $id])->get('kota')->row_array();
    }
    
    function save($data) {
        $this->db->insert('kota',$data);
    }

    function update($id,$data) {
        $this->db->where(['id' => $id])->update('kota',$data);
    }

    function delete($id) {
        $this->db->where(['id' => $id])->delete('kota');
    }
}
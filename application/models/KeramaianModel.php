<?php

class KeramaianModel extends CI_Model {
    function get(){
        return $this->db->get('keramaian')->result_array();
    }

    function find($id) {
        return $this->db->where(['id' => $id])->get('keramaian')->row_array();
    }
    
    function save($data) {
        $this->db->insert('keramaian',$data);
    }

    function update($id,$data) {
        $this->db->where(['id' => $id])->update('keramaian',$data);
    }

    function delete($id) {
        $this->db->where(['id' => $id])->delete('keramaian');
    }

    function getKota($kota) {
        return $this->db->where(['id_kota' => $kota])->get('keramaian')->result_array();
    }
}
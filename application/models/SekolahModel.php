<?php

class SekolahModel extends CI_Model {
    function get(){
        return $this->db->get('sekolah')->result_array();
    }

    function find($id) {
        return $this->db->where(['id' => $id])->get('sekolah')->row_array();
    }
    
    function save($data) {
        $this->db->insert('sekolah',$data);
    }

    function update($id,$data) {
        $this->db->where(['id' => $id])->update('sekolah',$data);
    }

    function delete($id) {
        $this->db->where(['id' => $id])->delete('sekolah');
    }

    function getKota($kota) {
        return $this->db->where(['id_kota' => $kota])->get('sekolah')->result_array();
    }
}
<?php

class MediaModel extends CI_Model {
    function get(){
        return $this->db->get('media_promosi')->result_array();
    }

    function find($id) {
        return $this->db->where(['id' => $id])->get('media_promosi')->row_array();
    }
    
    function save($data) {
        $this->db->insert('media_promosi',$data);
    }

    function update($id,$data) {
        $this->db->where(['id' => $id])->update('media_promosi',$data);
    }

    function delete($id) {
        $this->db->where(['id' => $id])->delete('media_promosi');
    }

    function getKota($kota) {
        return $this->db->where(['id_kota' => $kota])->get('media_promosi')->result_array();
    }
}
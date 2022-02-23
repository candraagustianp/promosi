<?php

class Keramaian extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('KeramaianModel','k');
    }

    function index() {
        $this->load->view('template',[
            'content' => $this->load->view('dashboard',[
                'data' => $this->k->get()
            ],true)
        ]);
    }

    function save() {
        $this->k->save($this->input->post());
        print_r($this->input->post());
    }

    function find($id) {
        $this->load->view('template',[
            'content' => $this->load->view('dashboard',[
                'data' => $this->k->find($id)
            ],true)
        ]);
    }


    function update($id) {
        $this->k->update($id,$this->input->post());
    }

    function delete($id) {
        $this->k->delete($id);
    }

    
}

?>
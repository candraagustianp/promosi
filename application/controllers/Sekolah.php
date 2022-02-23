<?php

class Sekolah extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('SekolahModel','s');
        $this->load->model('KeramaianModel','k');
    }

    function index() {
        $this->load->view('template',[
            'content' => $this->load->view('dashboard',[
                'sekolah' => $this->s->get(),
                'keramaian' => $this->k->get()
            ],true)
        ]);
    }

    function save() {
        $this->s->save($this->input->post());
        print_r($this->input->post());
    }

    function find($id) {
        $this->load->view('template',[
            'content' => $this->load->view('dashboard',[
                'data' => $this->s->find($id)
            ],true)
        ]);
    }


    function update($id) {
        $this->s->update($id,$this->input->post());
    }

    function delete($id) {
        $this->s->delete($id);
    }

    
}

?>
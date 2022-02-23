<?php

class Dashboard extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('SekolahModel','s');
        $this->load->model('KeramaianModel','k');
    }

    function index() {
        $this->load->view('template', [
            'content' => $this->load->view('map',[],true)
        ]);
    }

    function tambah() {
        $this->load->view('template',[
            'content' => $this->load->view('tambah',[],true)
        ]);
    }
    
}

?>
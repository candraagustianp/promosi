<?php

class Dashboard extends CI_Controller {

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

    
}

?>
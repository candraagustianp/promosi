<?php

class Dashboard extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('SekolahModel','s');
        $this->load->model('KeramaianModel','k');
        $this->load->model('MediaModel','m');
        $this->load->model('KotaModel','c');

    }

    function index() {
        $this->load->view('template', [
            'content' => $this->load->view('dashboard/map',[
                'sekolah' => $this->s->get(),
                'keramaian' => $this->k->get(),
                'media' => $this->m->get()
            ],true),
            'kotas' => $this->c->get(),
            'kota' => 0
        ]);
    }
    
    function kota($kota) {
        $this->load->view('template', [
            'content' => $this->load->view('dashboard/map',[
                'sekolah' => $this->s->getKota($kota),
                'keramaian' => $this->k->getKota($kota),
                'media' => $this->m->getKota($kota)
            ],true),
            'kotas' => $this->c->get(),
            'kota' => $kota
        ]);
    }
    
    
}

?>
<?php

class Sekolah extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('SekolahModel','s');
        $this->load->model('KotaModel','k');

    }

    function index($kota) {
        if ($kota) $data['sekolah'] = $this->s->getKota($kota);
        else $data['sekolah'] = $this->s->get();

        $this->load->view('template',[
            'content' => $this->load->view('sekolah/map',$data,true),
            'kotas' => $this->k->get(),
            'kota' => $kota
        ]);
    }

    function tambah() {
        $kota = 0;
        $this->load->view('template',[
            'content' => $this->load->view('sekolah/tambah',[
                'kotas' => $this->k->get()
            ],true),
            'kotas' => $this->k->get(),
            'kota' => $kota
        ]);
    }

    function save() {
        $this->s->save($this->input->post());
        redirect("Dashboard");
    }

    function edit($id) {
        $kota = 0;
        $this->load->view('template',[
            'content' => $this->load->view('sekolah/edit',[
                'data' => $this->s->find($id),
                'kotas' => $this->k->get()
            ],true),
            'kotas' => $this->k->get(),
            'kota' => $kota
        ]);
    }


    function update($id) {
        $this->s->update($id,$this->input->post());
        redirect("Dashboard");
    }

    function delete($id) {
        $this->s->delete($id);
        redirect("Dashboard");
    }

    
}

?>
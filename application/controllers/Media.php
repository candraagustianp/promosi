<?php

class Media extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('MediaModel','m');
        $this->load->model('KotaModel','k');
    }

    function index($kota) {
        if ($kota) $data['media'] = $this->m->getKota($kota);
        else $data['media'] = $this->m->get();

        $this->load->view('template',[
            'content' => $this->load->view('media/map',$data,true),
            'kotas' => $this->k->get(),
            'kota' => $kota
        ]);
    }

    function tambah() {
        $kota = 0;
        $this->load->view('template',[
            'content' => $this->load->view('media/tambah',[
                'kotas' => $this->k->get()
            ],true),
            'kotas' => $this->k->get(),
            'kota' => $kota
        ]);
    }

    function save() {
        $this->m->save($this->input->post());
        redirect("Dashboard");
    }

    function edit($id) {
        $kota = 0;
        $this->load->view('template',[
            'content' => $this->load->view('media/edit',[
                'data' => $this->m->find($id),
                'kotas' => $this->k->get()
            ],true),
            'kotas' => $this->k->get(),
            'kota' => $kota
        ]);
    }

    function update($id) {
        $this->m->update($id,$this->input->post());
        redirect("Dashboard");
    }

    function delete($id) {
        $this->m->delete($id);
        redirect("Dashboard");
    }

    
}

?>
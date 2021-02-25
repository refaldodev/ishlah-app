<?php

class Galeri extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Galeri_model');
        $this->load->library('upload');
    }

    public function index()
    {

        $get = $this->Galeri_model->get();

        $data = array(
            'row' => $get,
            'judul' => 'Galeri LDK Ishlah'
        );
        $this->load->view('templates/header', $data);
        $this->load->view('galeri/index', $data);
        $this->load->view('templates/footer');
    }
}

<?php

class Galeri extends CI_Controller
{
    public function index()
    {
        $data['judul'] = 'Galeri - LDK Ishlah';
        $this->load->view('templates/header', $data);
        $this->load->view('galeri/index', $data);
        $this->load->view('templates/footer');
    }
}

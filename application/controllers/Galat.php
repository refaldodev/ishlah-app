<?php

class Galat extends CI_Controller
{
    public function index()
    {

        $data['judul'] = 'LDK Ishlah';
        $this->load->view('templates/header', $data);
        $this->load->view('galat/index', $data);
        $this->load->view('templates/footer');
    }
}

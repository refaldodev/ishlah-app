<?php

class Artikel extends CI_Controller
{
    public function index()
    {
        $data['judul'] = 'Artikel - LDK Ishlah';


        $this->load->view('templates/header', $data);
        $this->load->view('artikel/index', $data);
        $this->load->view('templates/footer');
    }

    public function isiArtikel()
    {

        $data['judul'] = 'Isi Artikel - LDK Ishlah';


        $this->load->view('templates/header', $data);
        $this->load->view('artikel/isiartikel', $data);
        $this->load->view('templates/footer');
    }
}

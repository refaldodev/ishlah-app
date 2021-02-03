<?php

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // $this->load->model('Pendaftar_model');
    }
    public function index()

    {

        $data['judul'] = 'LDK Ishlah - Together Be Better';

        $this->load->view('templates/header', $data);
        $this->load->view('home/index', $data);
        $this->load->view('templates/footer');
    }
    public function tentangkami()
    {
        $data['judul'] = 'Tentang - LDK Ishlah';
        $this->load->view('templates/header', $data);
        $this->load->view('home/tentangkami', $data);
        $this->load->view('templates/footer');
    }
    public function faq()
    {
        $data['judul'] = 'Faq - LDK Ishlah';
        $this->load->view('templates/header', $data);
        $this->load->view('home/faq', $data);
        $this->load->view('templates/footer');
    }
    public function programkami()
    {
        $data['judul'] = 'Program Kami - LDK Ishlah';
        $this->load->view('templates/header', $data);
        $this->load->view('home/programkami', $data);
        $this->load->view('templates/footer', $data);
    }
}

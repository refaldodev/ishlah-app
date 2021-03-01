<?php

class JadwalKegiatan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Jadwal_model');
    }


    public function index()
    {
        $get = $this->Jadwal_model->get();
        $data['judul'] = 'Jadwal Kegiatan - LDK Ishlah';
        $data['row'] = $get;

        $this->load->view('templates/header', $data);
        $this->load->view('jadwalkegiatan/index', $data);
        $this->load->view('templates/footer');
    }
}

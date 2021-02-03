<?php

class JadwalKegiatan extends CI_Controller
{

    public function index()
    {
        $data['judul'] = 'Jadwal Kegiatan - LDK Ishlah';
        $this->load->view('templates/header', $data);
        $this->load->view('jadwalkegiatan/index', $data);
        $this->load->view('templates/footer');
    }
}

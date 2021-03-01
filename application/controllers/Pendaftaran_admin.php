<?php

class Pendaftaran_admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Pendaftaran_model');
        $this->load->model('User_model');
        $this->User_model->keamanan();
    }

    public function index()
    {
        $get = $this->Pendaftaran_model->get();

        $data = array(
            'row' => $get,
            'is_pendaftar' => true,
            'title' => 'Data Pendaftar',
            'user' => $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array(),
            'fakultas' => $this->db->get('tb_fakultas')->result(),
            'prodi' => $this->db->get('tb_prodi')->result()
        );

        // var_dump($get);
        // die();

        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('admin/pendaftar/index');
        $this->load->view('admin/templates/footer');
    }
}

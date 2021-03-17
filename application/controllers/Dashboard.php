<?php

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
        $this->User_model->keamanan();
    }

    public function index()

    {
        $data['is_dashboard'] = true;
        $data['title'] = 'Dasboard';
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['pendaftar'] = $this->db->query('SELECT
                                            COUNT(id) as jumlah_pendaftar
                                            FROM tb_pendaftar')->row();

        $data['artikel'] = $this->db->query('SELECT
                                            COUNT(id) as jumlah_artikel
                                            FROM tb_artikel')->row();

        $data['jml_user'] = $this->db->query('SELECT
                                            COUNT(id) as jumlah_user
                                            FROM user')->row();

        $data['jml_pendaftar'] = $this->db->query('SELECT
                                            COUNT(id) as jumlah
                                            FROM tb_pendaftar WHERE date_created = day(now())')->row();

        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('admin/dashboard/index');
        $this->load->view('admin/templates/footer');
    }
}

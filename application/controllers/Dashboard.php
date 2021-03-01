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
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/topbar');
        $this->load->view('admin/dashboard/index');
        $this->load->view('admin/templates/footer');
    }
}

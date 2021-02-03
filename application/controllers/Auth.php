<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
        $this->load->library('form_validation');
    }
    public function index()
    {

        $data["judul"] = "Halaman Login";
        $this->load->view('templates/auth_header', $data);
        $this->load->view('auth/login');
        $this->load->view('templates/auth_footer');
    }
    public function pendaftaran()
    {
        $data['jpakaian'] = ['Pakaian Wanita', 'Pakaian Pria'];
        $data['pakaian'] = ['Bh', 'lisptik', 'sempanseksi'];
        $data["judul"] = "Pendaftaran LDK Ishlah";
        $this->load->view('templates/auth_header', $data);
        $this->load->view('auth/pendaftaran', $data);

        $this->load->view('templates/auth_footer', $data);
    }
}

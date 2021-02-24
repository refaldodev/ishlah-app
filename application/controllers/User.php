<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
        $this->load->library('form_validation');
        $this->load->library('session');
        $this->load->model('User_model');
    }
    public function index()
    {

        $get = $this->User_model->get();

        $data = array(
            'row' => $get,
            'is_user' => true,
            'title' => 'Data Master - User',
            'user' => $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array()
        );

        // var_dump($get);
        // die();

        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/topbar');
        $this->load->view('admin/user/index');
        $this->load->view('admin/templates/footer');
    }

    public function registration()
    {

        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('username', 'Username', 'required|trim|is_unique[user.username]', [
            'is_unique' => 'This Username has already!'
        ]);
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]');
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|min_length[3]|matches[password1]');

        $data = [
            'name' => htmlspecialchars($this->input->post('name', true)),
            'username' => htmlspecialchars($this->input->post('username', true)),
            'image' => 'default.jpg',
            'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
            'is_active' => 1,
            'level' => $this->input->post('level'),
            'date_created' => time()
        ];
        $this->db->insert('user', $data);
        $this->session->set_flashdata('flash', 'Ditambahkan');
        redirect('user');
    }

    public function hapus($id)
    {
        $where = array('id' => $id);
        $this->User_model->hapus_data($where, 'user');
        $this->session->set_flashdata('flash_hapus', 'Dihapus');
        redirect('user');
    }

    public function tambah()
    {
        $data = array(

            'is_user' => true,
            'title' => 'Data Master - User',
            'user' => $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array()
        );

        // var_dump($get);
        // die();

        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/topbar');
        $this->load->view('admin/user/tambah');
        $this->load->view('admin/templates/footer');
    }
}

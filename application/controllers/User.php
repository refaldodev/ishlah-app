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
        $this->User_model->keamanan();
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
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('admin/user/index', $data);
        $this->load->view('admin/templates/footer');
    }

    // public function registration()
    // {

    //     $this->form_validation->set_rules('name', 'Name', 'required|trim');
    //     $this->form_validation->set_rules('username', 'Username', 'required|trim|is_unique[user.username]', [
    //         'is_unique' => 'This Username has already!'
    //     ]);
    //     $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]');
    //     $this->form_validation->set_rules('password2', 'Password', 'required|trim|min_length[3]|matches[password1]');

    //     $data = [
    //         'name' => htmlspecialchars($this->input->post('name', true)),
    //         'username' => htmlspecialchars($this->input->post('username', true)),
    //         'image' => 'default.jpg',
    //         'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
    //         'is_active' => 1,
    //         'level' => $this->input->post('level'),
    //         'date_created' => time()
    //     ];
    //     $this->db->insert('user', $data);
    //     $this->session->set_flashdata('flash', 'Ditambahkan');
    //     redirect('user');
    // }
    public function tambah()
    {


        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('username', 'Username', 'required|trim|is_unique[user.username]', [
            'is_unique' => 'This Username has already!'
        ]);
        $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[5]');
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|min_length[5]|matches[password]');
        $this->form_validation->set_rules('level', 'level', 'required');

        $this->form_validation->set_message('required', '%s Masih kosong silahkan diisi');
        $this->form_validation->set_message('matches', '{field} Tidak sesuai');
        $this->form_validation->set_message('min_length', '{field} Minimal 5 karakter');
        $this->form_validation->set_message('is_unique', '{field} sudah dipakai, silahkan ganti yang lain');
        $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');

        // $data = [
        //     'name' => htmlspecialchars($this->input->post('name', true)),
        //     'username' => htmlspecialchars($this->input->post('username', true)),
        //     'image' => 'default.jpg',
        //     'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
        //     'is_active' => 1,
        //     'level' => $this->input->post('level'),
        //     'date_created' => time()
        // ];
        // $this->db->insert('user', $data);
        if ($this->form_validation->run() == FALSE) {
            $data = array(

                'is_user' => true,
                'title' => 'Data Master - User',
                'user' => $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array()
            );
            $this->load->view('admin/templates/header', $data);
            $this->load->view('admin/templates/topbar', $data);
            $this->load->view('admin/user/tambah');
            $this->load->view('admin/templates/footer');
        } else {
            $data = $this->input->post(NULL, TRUE);
            $this->User_model->tambah($data);
            if ($this->db->affected_rows() > 0) {
                // echo "<script>alert('data berhasil di simpan');</script>";
                // echo "<script>alert('data berhasil ditambah') </script>";
                $this->session->set_flashdata('success', 'Data berhasil ditambah');
            }

            redirect('user');
        }
    }


    public function edit($id)
    {

        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('username', 'Username', 'required');
        if ($this->input->post('password')) {

            $this->form_validation->set_rules('password', 'Password', 'trim|min_length[5]');
            $this->form_validation->set_rules('password2', 'Password', 'trim|min_length[5]|matches[password]');
        }
        $this->form_validation->set_rules('level', 'level', 'required');

        $this->form_validation->set_message('required', '%s Masih kosong silahkan diisi');
        $this->form_validation->set_message('matches', '{field} Tidak sesuai');
        $this->form_validation->set_message('min_length', '{field} Minimal 5 karakter');
        $this->form_validation->set_message('is_unique', '{field} sudah dipakai, silahkan ganti yang lain');
        $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');

        if ($this->form_validation->run() == FALSE) {
            $data = array(
                'row' => $this->User_model->getUserId($id),
                'is_user' => true,
                'title' => 'Edit Data',
                'user' => $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array()
            );
            $this->load->view('admin/templates/header', $data);
            $this->load->view('admin/templates/topbar', $data);
            $this->load->view('admin/user/edit', $data);
            $this->load->view('admin/templates/footer');
        } else {
            $data = $this->input->post(NULL, TRUE);
            $this->User_model->edit_data($data);
            if ($this->db->affected_rows() > 0) {
                // echo "<script>alert('data berhasil di simpan');</script>";
                // echo "<script>alert('data berhasil ditambah') </script>";
                $this->session->set_flashdata('success', 'Data berhasil ditambah');
            }

            redirect('user');
        }
    }
    public function hapus($id)
    {

        $this->User_model->hapus_data($id);
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('success', 'data berhasil dihapus');
        }
        redirect('user');
    }

    public function edit_profile($id)
    {
        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('username', 'Username', 'required|trim|is_unique[user.username]');
        if ($this->input->post('password')) {

            $this->form_validation->set_rules('password', 'Password', 'trim|min_length[5]');
            $this->form_validation->set_rules('password2', 'Password', 'trim|min_length[5]|matches[password]');
        }

        $this->form_validation->set_message('required', '%s Masih kosong silahkan diisi');
        $this->form_validation->set_message('matches', '{field} Tidak sesuai');
        $this->form_validation->set_message('min_length', '{field} Minimal 5 karakter');
        $this->form_validation->set_message('is_unique', '{field} sudah dipakai, silahkan ganti yang lain');
        $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');

        if ($this->form_validation->run() == FALSE) {
            $data = array(
                'row' => $this->User_model->getUserId($id),
                'title' => 'Edit Profile',
                'user' => $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array()
            );
            $this->load->view('admin/templates/header', $data);
            $this->load->view('admin/templates/topbar', $data);
            $this->load->view('admin/user/edit_profile', $data);
            $this->load->view('admin/templates/footer');
        } else {
            $data = $this->input->post(NULL, TRUE);
            $this->User_model->edit_profile($data);
            if ($this->db->affected_rows() > 0) {
                // echo "<script>alert('data berhasil di simpan');</script>";
                // echo "<script>alert('data berhasil ditambah') </script>";
                $this->session->set_flashdata('success', 'Data berhasil ditambah');
            }

            redirect('dashboard');
        }
    }
}

<?php
defined('BASEPATH') or exit('No direct script access allowed');

class JadwalKegiatan_admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Jadwal_model');
        $this->load->model('User_model');
        $this->load->library('session');
        $this->User_model->keamanan();
    }

    public function index()
    {

        $get = $this->Jadwal_model->get();

        $data = array(
            'row' => $get,
            'is_jadwal' => true,
            'title' => 'Data Jadwal Kegiatan',
            'user' => $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array()
        );

        // var_dump($get);
        // die();

        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('admin/jadwal/index', $data);
        $this->load->view('admin/templates/footer');
    }

    public function tambah()
    {
        $data = array(
            'judul_kegiatan' => $this->input->post('judul_kegiatan'),
            'hari' => $this->input->post('hari'),
            'waktu' => $this->input->post('waktu'),
            'waktu2' => $this->input->post('waktu2'),
            'tempat' => $this->input->post('tempat'),
            'pic' => $this->input->post('pic')
        );
        $this->Jadwal_model->tambah_data($data, 'tb_jadwal');
        $this->session->set_flashdata('flash', 'Ditambahkan');
        redirect('JadwalKegiatan_admin/index');
    }
    public function hapus($id)
    {
        $where = array('id' => $id);
        $this->Jadwal_model->hapus_data($where, 'tb_jadwal');
        $this->session->set_flashdata('flash_hapus', 'Dihapus');
        redirect('JadwalKegiatan_admin/index');
    }
    public function edit($id)
    {
        $where = array('id' => $id);
        $data['title'] = 'Edit Jadwal Kegiatan';
        $data['jadwal'] = $this->Jadwal_model->edit_data($where, 'tb_jadwal')->result();
        $data['is_jadwal'] = true;
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('admin/jadwal/edit', $data);
        $this->load->view('admin/templates/footer');
    }
    public function update()
    {
        $id = $this->input->post('id');
        $judul_kegiatan = $this->input->post('judul_kegiatan');
        $hari = $this->input->post('hari');
        $waktu = $this->input->post('waktu');
        $waktu2 = $this->input->post('waktu2');
        $tempat = $this->input->post('tempat');
        $pic = $this->input->post('pic');

        $data = array(
            'judul_kegiatan' => $judul_kegiatan,
            'hari' => $hari,
            'waktu' => $waktu,
            'waktu2' => $waktu2,
            'tempat' => $tempat,
            'pic' => $pic
        );

        $where = array(
            'id' => $id
        );

        $this->Jadwal_model->update_data($where, $data, 'tb_jadwal');
        $this->session->set_flashdata('flash', 'Diedit');
        redirect('JadwalKegiatan_admin/index');
    }
}

<?php

class Pendaftaran_admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Pendaftaran_model');
        $this->load->model('User_model');
        $this->load->helper('tgl_indo');
        $this->User_model->keamanan();
    }

    public function index()
    {
        $data['row'] = $this->Pendaftaran_model->get();
        if (isset($_POST['filter'])) {
            $awal = $_POST['awal'];
            $akhir = $_POST['akhir'];
            $data['row'] = $this->Pendaftaran_model->getDataTanggal($awal, $akhir);
        } else if (isset($_POST['reset'])) {
            $data['row'] = $this->Pendaftaran_model->get();
        }
        $data['title'] = 'Data Pendaftar';
        $data['is_pendaftar'] = true;
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        // var_dump($data['row']);
        // die;
        // $get = $this->Pendaftaran_model->get();

        // $data = array(
        //     'row' => $get,
        //     'is_pendaftar' => true,
        //     'title' => 'Data Pendaftar',
        //     'user' => $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array(),
        //     'fakultas' => $this->db->get('tb_fakultas')->result(),
        //     'prodi' => $this->db->get('tb_prodi')->result()
        // );

        // var_dump($get);
        // die();

        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('admin/pendaftar/index', $data);
        $this->load->view('admin/templates/footer');
    }

    public function hapus($id)
    {
        $where = array('id' => $id);
        $this->Pendaftaran_model->hapus_data($where, 'tb_pendaftar');
        $this->session->set_flashdata('flash_hapus', 'Dihapus');
        redirect('pendaftaran_admin');
    }
}

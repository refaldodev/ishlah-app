<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pendaftaran extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
        $this->load->model('Pendaftaran_model');
        $this->load->library('form_validation');
    }



    public function index1()
    {

        $data["judul"] = "Halaman Login";
        $this->load->view('templates/auth_header', $data);
        $this->load->view('auth/login');
        $this->load->view('templates/auth_footer');
    }
    public function index()
    {

        $data["judul"] = "Pendaftaran LDK Ishlah";
        $data['fakultas'] = $this->db->get('tb_fakultas')->result();

        $this->load->view('templates/auth_header', $data);
        $this->load->view('auth/pendaftaran', $data);

        $this->load->view('templates/auth_footer', $data);
    }

    public function tambah_pendaftar()
    {
        $nama            = $this->input->post('nama');
        $email            = $this->input->post('email');
        $no_wa            = $this->input->post('no_wa');
        $jkel            = $this->input->post('jkel');
        $id_fakultas            = $this->input->post('id_fakultas');
        $id_prodi            = $this->input->post('id_prodi');
        $angkatan            = $this->input->post('angkatan');
        $motivasi            = $this->input->post('motivasi');

        $data = array(
            'nama'        => $nama,
            'email'        => $email,
            'no_wa'        => $no_wa,
            'jkel'        => $jkel,
            'id_fakultas'        => $id_fakultas,
            'id_prodi'        => $id_prodi,
            'angkatan'        => $angkatan,
            'motivasi'        => $motivasi,
            'date_created'        => time()
        );

        $this->Pendaftaran_model->tambah_pendaftar($data, 'tb_pendaftar');
        redirect('pendaftaran/success');
    }

    // get sub category by category_id
    function get_prodi()
    {
        $id_fakultas = $this->input->post('id', TRUE);
        $data = $this->Pendaftaran_model->get_prodi($id_fakultas)->result();
        echo json_encode($data);
    }

    function success()
    {
        $data["judul"] = "Pendaftaran LDK Ishlah";
        $this->load->view('templates/auth_header', $data);
        $this->load->view('auth/success', $data);

        $this->load->view('templates/auth_footer', $data);
    }
}

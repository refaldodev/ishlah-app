<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Divisi_proker extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Proker_model');
        $this->load->model('Divisi_model');
    }
    public function index_divisi()
    {
        $get = $this->Divisi_model->get();

        $data = array(
            'row' => $get,
            'is_proker' => true,
            'is_divisi' => true,
            'title' => 'Data Master - Proker',
            'user' => $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array()

        );

        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('admin/proker/divisi', $data);
        $this->load->view('admin/templates/footer');
    }

    public function index_proker()
    {
        $get = $this->Proker_model->get();

        $data = array(
            'row' => $get,
            'is_proker' => true,
            'is_isi' => true,
            'title' => 'Data Master - Proker',
            'divisi_proker' => $this->db->get('divisi_proker')->result(),
            'user' => $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array()
        );

        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('admin/proker/isi', $data);
        $this->load->view('admin/templates/footer');
    }
    public function tambah_divisi()
    {
        $nama_divisi            = $this->input->post('nama_divisi');

        $data = array(
            'nama_divisi'        => $nama_divisi
        );

        // $data = [
        // 'nama'		=> $this->input->post('nama'),
        // 'nim'		=> $this->input->post('nim'),
        // 'tgl_lahir'	=> $this->input->post('tgl_lahir'),
        // 'jurusan'	=> $this->input->post('jurusan'),
        // 'alamat'	=> $this->input->post('alamat'),
        // 'email'		=> $this->input->post('email'),
        // 'no_telp'	=> $this->input->post('no_telp'),
        // 'foto'		=> 
        // ];

        $this->Divisi_model->tambah_data($data, 'divisi_proker');
        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible" role="alert">
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			  Data Berhasil Ditambahkan!
			</div>');
        redirect('divisi_proker/index_divisi');
    }

    public function tambah_isi()
    {
        $data = array(
            'is_proker' => true,
            'is_isi' => true,
            'title' => 'Data Master - Proker',
            'divisi_proker' => $this->db->get('divisi_proker')->result(),
            'user' => $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array()
        );

        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('admin/proker/tambah_isi', $data);
        $this->load->view('admin/templates/footer');
    }

    public function proses_tambah()
    {
        $id_divisi_proker            = $this->input->post('id_divisi_proker');
        $judul_proker            = $this->input->post('judul_proker');
        $deskripsi_proker            = $this->input->post('deskripsi_proker');
        $foto             = $_FILES['cover_proker'];
        if ($foto = '') {
        } else {
            $config['upload_path']        = './assets/cover_proker';
            $config['allowed_types']    = 'jpg|png|gif';

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('cover_proker')) {
                echo "Upload Gagal !";
                die();
            } else {
                $foto = $this->upload->data('file_name');
            }
        }

        $data = array(
            'id_divisi_proker'        => $id_divisi_proker,
            'judul_proker'        => $judul_proker,
            'deskripsi_proker'        => $deskripsi_proker,
            'cover_proker'        => $foto
        );

        // $data = [
        // 'nama'		=> $this->input->post('nama'),
        // 'nim'		=> $this->input->post('nim'),
        // 'tgl_lahir'	=> $this->input->post('tgl_lahir'),
        // 'jurusan'	=> $this->input->post('jurusan'),
        // 'alamat'	=> $this->input->post('alamat'),
        // 'email'		=> $this->input->post('email'),
        // 'no_telp'	=> $this->input->post('no_telp'),
        // 'foto'		=> 
        // ];

        $this->Proker_model->tambah_data($data, 'isi_proker');
        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible" role="alert">
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			  Data Berhasil Ditambahkan!
			</div>');
        redirect('divisi_proker/index_proker');
    }

    public function hapus_divisi($id)
    {
        $where = array('id' => $id);
        $this->Divisi_model->hapus_data($where, 'divisi_proker');
        $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        Data Berhasil Dihapus!</div>');
        redirect('divisi_proker/index_divisi');
    }
    public function hapus_isi($id)
    {
        $where = array('id' => $id);
        $this->Proker_model->hapus_data($where, 'isi_proker');
        $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        Data Berhasil Dihapus!</div>');
        redirect('divisi_proker/index_proker');
    }
}

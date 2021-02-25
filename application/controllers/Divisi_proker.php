<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Divisi_proker extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Proker_model');
        $this->load->model('Divisi_model');
        $this->load->library('upload');
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


    public function hapus_divisi($id)
    {
        $where = array('id' => $id);
        $this->Divisi_model->hapus_data($where, 'divisi_proker');
        $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        Data Berhasil Dihapus!</div>');
        redirect('divisi_proker/index_divisi');
    }

    public function insertdata()
    {
        $id_divisi_proker            = $this->input->post('id_divisi_proker');
        $judul_proker            = $this->input->post('judul_proker');
        $deskripsi_proker            = $this->input->post('deskripsi_proker');

        // get foto
        $config['upload_path'] = './assets/cover_proker';
        $config['allowed_types'] = 'jpg|png|jpeg|gif';
        $config['max_size'] = '2048';  //2MB max
        // $config['max_width'] = '4480'; // pixel
        // $config['max_height'] = '4480'; // pixel
        $config['file_name'] = $_FILES['fotopost']['name'];

        $this->upload->initialize($config);

        if (!empty($_FILES['fotopost']['name'])) {
            if ($this->upload->do_upload('fotopost')) {
                $foto = $this->upload->data();
                $data = array(
                    'id_divisi_proker'       => $id_divisi_proker,
                    'judul_proker'       => $judul_proker,
                    'deskripsi_proker'       => $deskripsi_proker,
                    'cover_proker'       => $foto['file_name']
                );
                $this->Proker_model->insert($data);
                redirect('divisi_proker/index_proker');
            } else {
                die("gagal upload");
            }
        } else {
            echo "tidak masuk";
        }
    }

    // delete
    public function deletedata($id, $cover_proker)
    {
        $path = './assets/cover_proker';
        @unlink($path . $cover_proker);

        $where = array('id' => $id);
        $this->Proker_model->delete($where);
        return redirect('divisi_proker/index_proker');
    }

    // edit
    public function edit($id)
    {
        // $this->User_model->keamanan();
        $kondisi = array('id' => $id);

        $data = array(
            'is_proker' => true,
            'is_isi' => true,
            'title' => 'Data Master - Proker',
            'divisi_proker' => $this->db->get('divisi_proker')->result(),
            'user' => $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array()
        );

        $data['data'] = $this->Proker_model->get_by_id($kondisi);
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('admin/proker/edit_isi', $data);
        $this->load->view('admin/templates/footer');
    }

    // update
    public function updatedata()
    {
        $id   = $this->input->post('id');
        $id_divisi_proker            = $this->input->post('id_divisi_proker');
        $judul_proker            = $this->input->post('judul_proker');
        $deskripsi_proker            = $this->input->post('deskripsi_proker');

        $path = './assets/cover_proker';

        $kondisi = array('id' => $id);

        // get foto
        $config['upload_path'] = './assets/cover_proker';
        $config['allowed_types'] = 'jpg|png|jpeg|gif';
        $config['max_size'] = '2048';  //2MB max
        // $config['max_width'] = '4480'; // pixel
        // $config['max_height'] = '4480'; // pixel
        $config['file_name'] = $_FILES['fotopost']['name'];

        $this->upload->initialize($config);

        if (!empty($_FILES['fotopost']['name'])) {
            if ($this->upload->do_upload('fotopost')) {
                $foto = $this->upload->data();
                $data = array(
                    'id_divisi_proker'       => $id_divisi_proker,
                    'judul_proker'       => $judul_proker,
                    'deskripsi_proker'       => $deskripsi_proker,
                    'cover_proker'       => $foto['file_name']
                );
                // hapus foto pada direktori
                @unlink($path . $this->input->post('filelama'));

                $this->Proker_model->update($data, $kondisi);
                redirect('divisi_proker/index_proker');
            } else {
                die("gagal update");
            }
        } else {
            echo "tidak masuk";
        }
    }
}

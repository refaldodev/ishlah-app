<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Divisi_proker extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Proker_model');
        $this->load->model('Divisi_model');
        $this->load->model('User_model');
        $this->load->library('upload');
        $this->User_model->keamanan();
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
        $this->session->set_flashdata('flash', 'Ditambahkan');
        redirect('divisi_proker/index_divisi');
    }
    public function hapus_divisi($id)
    {
        $where = array('id' => $id);
        $this->Divisi_model->hapus_data($where, 'divisi_proker');
        $this->session->set_flashdata('flash_hapus', 'Dihapus');
        redirect('divisi_proker/index_divisi');
    }
    public function edit_divisi($id)
    {
        $data = array(
            'title' => 'Edit Divisi'
        );

        $where = array('id' => $id);
        $data['is_proker'] = true;
        $data['is_divisi'] = true;
        $data['divisi'] = $this->Divisi_model->edit_data($where, 'divisi_proker')->result();
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();



        $this->load->view('admin/templates/header');
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('admin/proker/edit_divisi', $data);
        $this->load->view('admin/templates/footer');
    }
    public function update_divisi()
    {
        $id = $this->input->post('id');
        $nama_divisi = $this->input->post('nama_divisi');


        $data = array(
            'nama_divisi' => $nama_divisi,

        );

        $where = array(
            'id' => $id
        );

        $this->Divisi_model->update_data($where, $data, 'divisi_proker');
        $this->session->set_flashdata('flash', 'Diedit');
        redirect('divisi_proker/index_divisi');
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



    public function insertdata()
    {
        $id_divisi_proker            = $this->input->post('id_divisi_proker');
        $judul_proker            = $this->input->post('judul_proker');
        $deskripsi_proker            = $this->input->post('deskripsi_proker');
        $string = preg_replace('/[^a-zA-Z0-9 \&%|{.}=,?!*()"-_+$@;<>\']/', '', $judul_proker); //filter karakter unik dan replace dengan kosong ('')
        $trim = trim($string); // hilangkan spasi berlebihan dengan fungsi trim
        $pre_slug = strtolower(str_replace(" ", "-", $trim)); // hilangkan spasi, kemudian ganti spasi dengan tanda strip (-)
        $slug = $pre_slug . '.html'; // tambahkan ektensi .html pada slug

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
                    'post_slug'       => $slug,
                    'deskripsi_proker'       => $deskripsi_proker,
                    'cover_proker'       => $foto['file_name']
                );
                $this->Proker_model->insert($data);
                $this->session->set_flashdata('flash', 'Ditambahkan');
                redirect('divisi_proker/index_proker');
            } else {
                die("gagal upload");
            }
        } else {
            echo "tidak masuk";
        }
    }

    // delete
    public function hapus_isi($id, $cover_proker)
    {
        $path = './assets/cover_proker';
        @unlink($path . $cover_proker);

        $where = array('id' => $id);
        $this->Proker_model->delete($where);
        $this->session->set_flashdata('flash_hapus', 'Dihapus');
        return redirect('divisi_proker/index_proker');
    }

    // edit
    public function edit_isi($id)
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
    public function update_isi()
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
                $this->session->set_flashdata('flash', 'Diedit');
                redirect('divisi_proker/index_proker');
            } else {
                die("gagal update");
            }
        } else {
            echo "tidak masuk";
        }
    }
}

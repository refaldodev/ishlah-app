<?php

class Galeri extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Galeri_model');
        $this->load->library('upload');
    }

    public function index()
    {

        $get = $this->Galeri_model->get();

        $data = array(
            'row' => $get,
            'judul' => 'Galeri LDK Ishlah'
        );
        $this->load->view('templates/header', $data);
        $this->load->view('galeri/index', $data);
        $this->load->view('templates/footer');
    }

    public function index_admin()
    {
        $get = $this->Galeri_model->get();

        $data = array(
            'row' => $get,
            'is_galeri' => true,
            'title' => 'Data Galeri',
            'user' => $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array()
        );

        // var_dump($get);
        // die();

        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('admin/galeri/index');
        $this->load->view('admin/templates/footer');
    }

    // untuk memasukan data ke database
    public function insertdata()
    {
        $judul = $this->input->post('judul');

        // get foto
        $config['upload_path'] = './assets/galeri';
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
                    'judul'       => $judul,
                    'image_galeri'       => $foto['file_name']
                );
                $this->Galeri_model->insert($data);
                redirect('galeri/index_admin');
            } else {
                die("gagal upload");
            }
        } else {
            echo "tidak masuk";
        }
    }

    // delete
    public function deletedata($id, $image_galeri)
    {
        $path = './assets/galeri';
        @unlink($path . $image_galeri);

        $where = array('id' => $id);
        $this->Galeri_model->delete($where);
        return redirect('galeri/index_admin');
    }

    // edit
    public function edit($id)
    {
        $kondisi = array('id' => $id);

        $data = array(
            'is_galeri' => true,
            'title' => 'Data Galeri',
            'user' => $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array()
        );

        $data['data'] = $this->Galeri_model->get_by_id($kondisi);
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('admin/galeri/edit_galeri', $data);
        $this->load->view('admin/templates/footer');
    }

    // update
    public function updatedata()
    {
        $id   = $this->input->post('id');
        $judul = $this->input->post('judul');

        $path = './assets/galeri';

        $kondisi = array('id' => $id);

        // get foto
        $config['upload_path'] = './assets/galeri';
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
                    'judul'       => $judul,
                    'image_galeri'       => $foto['file_name']
                );
                // hapus foto pada direktori
                @unlink($path . $this->input->post('filelama'));

                $this->Galeri_model->update($data, $kondisi);
                redirect('galeri/index_admin');
            } else {
                die("gagal update");
            }
        } else {
            echo "tidak masuk";
        }
    }
}

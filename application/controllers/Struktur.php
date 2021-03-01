<?php

class Struktur extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Struktur_model');
        $this->load->library('upload');
    }



    public function index()
    {

        $get = $this->Struktur_model->get();

        $data = array(
            'row' => $get,
            'is_struktur' => true,
            'title' => 'Data Struktur',
            'user' => $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array()
        );

        // var_dump($get);
        // die();

        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('admin/struktur/index', $data);
        $this->load->view('admin/templates/footer');
    }



    // edit
    public function edit($id)
    {

        $kondisi = array('id' => $id);

        $data = array(
            'is_struktur' => true,
            'user' => $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array()
        );

        $data['data'] = $this->Struktur_model->get_by_id($kondisi);
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('admin/struktur/edit_struktur', $data);
        $this->load->view('admin/templates/footer');
    }

    // update
    public function updatedata()
    {
        $id   = $this->input->post('id');

        $path = './assets/struktur_organisai';

        $kondisi = array('id' => $id);

        // get foto
        $config['upload_path'] = './assets/struktur_organisasi';
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
                    'image_struktur'       => $foto['file_name']
                );
                // hapus foto pada direktori
                @unlink($path . $this->input->post('filelama'));

                $this->Struktur_model->update($data, $kondisi);
                $this->session->set_flashdata('flash', 'Diubah');
                redirect('struktur/index');
            } else {
                die("gagal update");
            }
        } else {
            echo "tidak masuk";
        }
    }
}

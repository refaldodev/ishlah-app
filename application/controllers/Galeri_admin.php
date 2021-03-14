<?php

class Galeri_admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Galeri_model');
        $this->load->model('User_model');
        $this->load->library('upload');
        $this->User_model->keamanan();
    }

    public function index()
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
        $config['file_name'] = $_FILES['file']['name'];

        $this->upload->initialize($config);

        if (!empty($_FILES['file']['name'])) {
            if ($this->upload->do_upload('file')) {
                $foto = $this->upload->data();
                $data = array(
                    'judul'       => $judul,
                    'image_galeri'       => $foto['file_name']
                );
                $this->Galeri_model->insert($data);
                $this->session->set_flashdata('flash', 'Ditambahkan');
                redirect('galeri_admin/index');
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
        $this->session->set_flashdata('flash_hapus', 'Dihapus');
        return redirect('galeri_admin/index');
    }

    // edit
    public function edit($id)
    {
      $query= $this->db->query("SELECT `judul`,`image_galeri` FROM `tb_galeri` WHERE `id` = '$id'");

      $data['result'] = $query->result_array();
      $data['id']=$id;


        $this->load->view('admin/templates/header');
        $this->load->view('admin/templates/topbar');
        $this->load->view('admin/galeri/edit_galeri', $data);
        $this->load->view('admin/templates/footer');
    }

    // update
    public function updatedata()
    {
      //print_r($_POST);
      //print_r($_FILES);
      if ($_FILES ['file']['name'] ){
    //  die("update file");
      //update the image
          $config['upload_path']          = './assets/galeri/';
          $config['allowed_types']        = 'gif|jpg|png';
          $config['max_size']             = 2048;
          $config['max_width']            = 4480;
          $config['max_height']           = 4480;

          $this->load->library('upload', $config);

          if (!empty($_FILES['file']['name']))
          {
            if ($this->upload->do_upload('file')) {
                $foto = $this->upload->data();
                $data = array(
                    'judul'       => $judul,
                    'image_galeri'       => $foto['file_name']
                );
                // hapus foto pada direktori
                @unlink($path . $this->input->post('filelama'));

                $this->Galeri_model->update($data, $kondisi);
                $this->session->set_flashdata('flash', 'Diedit');
                redirect('galeri_admin/index');
            } else {
                die("gagal update");
            }
        }







      }else{
        //die("Tanpa file");
        $judul=$_POST['judul'];
        $id=$_POST['id'];

        $query=$this->db->query("UPDATE `tb_galeri` SET `judul` = '$judul' WHERE `id` = '$id' ");

        if ($query){
          $this->session->set_flashdata('diupdate','ya');
          redirect('galeri_admin/index');
        }else{
          $this->session->set_flashdata('diupdate','tidak');
          redirect('galeri_admin/index');
        }
      }


    }
}
//controller

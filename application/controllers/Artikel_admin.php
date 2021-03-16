<?php

class Artikel_admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Artikel_model');
        $this->load->model('User_model');
        $this->load->library('session');
        $this->load->library('upload');
        $this->User_model->keamanan();
    }

    public function index()
    {
        $get = $this->Artikel_model->get();

        $data = array(
            'row' => $get,
            'is_artikel' => true,
            'title' => 'Data Artikel',
            'user' => $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array()
        );

        // var_dump($get);
        // die();

        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('admin/artikel/index', $data);
        $this->load->view('admin/templates/footer');
    }
    public function tambah_artikel()
    {
        $data = array(
            'is_artikel' => true,
            'title' => 'Tambah Artikel',
            'user' => $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array()
        );

        // var_dump($get);
        // die();

        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('admin/artikel/tambah_artikel');
        $this->load->view('admin/templates/footer');
    }

    public function detail($id)
    {
        $data = array(
            'is_artikel' => true,
            'title' => 'Detail Artikel',
            'user' => $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array()
        );
        // $this->load->model('m_mahasiswa');
        $detail = $this->Artikel_model->detail_data($id);

        $data1['detail'] = $detail;
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('admin/artikel/detail_artikel', $data1);
        $this->load->view('admin/templates/footer');
    }

    // untuk memasukan data ke database
    public function insertdata()
    {
        $judul_artikel            = $this->input->post('judul_artikel');
        $isi_artikel            = $this->input->post('isi_artikel');
        $post_by            = $this->input->post('post_by');
        $string = preg_replace('/[^a-zA-Z0-9 \&%|{.}=,?!*()"-_+$@;<>\']/', '', $judul_artikel); //filter karakter unik dan replace dengan kosong ('')
        $trim = trim($string); // hilangkan spasi berlebihan dengan fungsi trim
        $pre_slug = strtolower(str_replace(" ", "-", $trim)); // hilangkan spasi, kemudian ganti spasi dengan tanda strip (-)
        $slug = $pre_slug;


        // get foto
        $config['upload_path'] = './assets/cover_artikel';
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
                    'judul_artikel'       => $judul_artikel,
                    'post_slug' => $slug,
                    'isi_artikel'       => $isi_artikel,
                    'post_by'       => $post_by,
                    'date_created'      => time(),
                    'cover_artikel'       => $foto['file_name']
                );
                $this->Artikel_model->insert($data);
                $this->session->set_flashdata('flash', 'Ditambahkan');
                redirect('artikel_admin/index');
            } else {
                $this->session->set_flashdata('message', '<script>alert("Terjadi Kesalahan Mohon Periksa Kembali Size dan Format Image")</script>');
                redirect('artikel_admin/index');
            }
        } else {
            echo "tidak masuk";
        }
    }

    // delete
    public function deletedata($id, $cover_artikel)
    {
        $path = './assets/cover_artikel/';
        unlink($path . $cover_artikel);


        $where = array('id' => $id);
        $this->Artikel_model->delete($where);
        $this->session->set_flashdata('flash_hapus', 'Dihapus');
        return redirect('artikel_admin/index');
    }

    // edit
    public function edit($id)
    {
        // $this->User_model->keamanan();
        $kondisi = array('id' => $id);

        $data = array(
            'is_artikel' => true,
            'title' => 'Data Artikel',
            'user' => $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array()
        );

        $data['data'] = $this->Artikel_model->get_by_id($kondisi);
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('admin/artikel/edit_artikel', $data);
        $this->load->view('admin/templates/footer');
    }

    // update
    public function updatedata()
    {
        $id   = $this->input->post('id');
        $judul_artikel            = $this->input->post('judul_artikel');
        $isi_artikel            = $this->input->post('isi_artikel');
        $post_by            = $this->input->post('post_by');
        $string = preg_replace('/[^a-zA-Z0-9 \&%|{.}=,?!*()"-_+$@;<>\']/', '', $judul_artikel); //filter karakter unik dan replace dengan kosong ('')
        $trim = trim($string); // hilangkan spasi berlebihan dengan fungsi trim
        $pre_slug = strtolower(str_replace(" ", "-", $trim)); // hilangkan spasi, kemudian ganti spasi dengan tanda strip (-)
        $slug = $pre_slug;

        $path = './assets/cover_artikel/';

        $kondisi = array('id' => $id);

        // get foto
        $config['upload_path'] = './assets/cover_artikel';
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
                    'judul_artikel'       => $judul_artikel,
                    'post_slug'       => $slug,
                    'isi_artikel'       => $isi_artikel,
                    'post_by'       => $post_by,
                    'cover_artikel'       => $foto['file_name']
                );
                // hapus foto pada direktori
                @unlink($path . $this->input->post('filelama'));

                $this->Artikel_model->update($data, $kondisi);
                $this->session->set_flashdata('flash', 'Diubah');
                redirect('artikel_admin/index');
            } else {
                $this->session->set_flashdata('message', '<script>alert("Terjadi Kesalahan Mohon Periksa Kembali Size dan Format Image")</script>');
                redirect('artikel_admin/index');
            }
        } else {
            // die("Tanpa file");
            $id   = $this->input->post('id');
            $judul_artikel            = $this->input->post('judul_artikel');
            $isi_artikel            = $this->input->post('isi_artikel');
            $post_by            = $this->input->post('post_by');
            $string = preg_replace('/[^a-zA-Z0-9 \&%|{.}=,?!*()"-_+$@;<>\']/', '', $judul_artikel); //filter karakter unik dan replace dengan kosong ('')
            $trim = trim($string); // hilangkan spasi berlebihan dengan fungsi trim
            $pre_slug = strtolower(str_replace(" ", "-", $trim)); // hilangkan spasi, kemudian ganti spasi dengan tanda strip (-)
            $slug = $pre_slug;



            $kondisi = array('id' => $id);
            // $id = $_POST['id'];

            // $query = $this->db->query("UPDATE `tb_artikel` SET `judul_artikel` = '$judul' WHERE `id` = '$id' ");
            $data = array(
                'judul_artikel'       => $judul_artikel,
                'post_slug'       => $slug,
                'isi_artikel'       => $isi_artikel,
                'post_by'       => $post_by
            );
            $query = $this->Artikel_model->update($data, $kondisi);

            if ($query) {
                $this->session->set_flashdata('flash', 'Diubah');
                redirect('artikel_admin/index');
            } else {
                $this->session->set_flashdata('diupdate', 'tidak');
                redirect('galeri_admin/index');
            }
        }
    }
}

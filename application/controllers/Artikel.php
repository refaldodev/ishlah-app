<?php

class Artikel extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Artikel_model');
        $this->load->library('session');
        $this->load->model('User_model');
        // $this->M_users->keamanan();
    }

    public function index()
    {
        // $data['judul'] = 'Artikel - LDK Ishlah';

        $get = $this->Artikel_model->get();

        $data = array(
            'row' => $get,
            'judul' => 'Artikel - LDK Ishlah'
        );

        $this->load->view('templates/header', $data);
        $this->load->view('artikel/index', $data);
        $this->load->view('templates/footer');
    }

    public function isiArtikel($id)
    {

        $data['judul'] = 'Isi Artikel - LDK Ishlah';
        $detail = $this->Artikel_model->detail_data($id);

        $data['detail'] = $detail;
        $data['user'] = $this->db->get_where('user', ['username'])->row_array();
        $data['new_artikel'] = $this->db->query("SELECT art.*,
                                                    art.judul_artikel as judul,
                                                    art.isi_artikel as isi,
                                                    art.post_by as nama,
                                                    art.cover_artikel as cover,
                                                    art.date_created as date_created
                                                    FROM tb_artikel art
                                                    ORDER BY art.date_created DESC
                                                    LIMIT 3")->result();

        $this->load->view('templates/header', $data);
        $this->load->view('artikel/isiartikel', $data);
        $this->load->view('templates/footer');
    }
    public function index_admin()
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
        $this->load->view('admin/artikel/index');
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
    public function proses_tambah()
    {
        $judul_artikel            = $this->input->post('judul_artikel');
        $isi_artikel            = $this->input->post('isi_artikel');
        $post_by            = $this->input->post('post_by');
        $foto             = $_FILES['cover_artikel'];
        if ($foto = '') {
        } else {
            $config['upload_path']        = './assets/cover_artikel';
            $config['allowed_types']    = 'jpg|png|gif';

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('cover_artikel')) {
                echo "Upload Gagal !";
                die();
            } else {
                $foto = $this->upload->data('file_name');
            }
        }



        $data = array(
            'judul_artikel'        => $judul_artikel,
            'isi_artikel'        => $isi_artikel,
            'post_by'        => $post_by,
            'cover_artikel'        => $foto,
            'date_created'      => time()
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

        $this->Artikel_model->tambah_data($data, 'tb_artikel');
        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible" role="alert">
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			  Data Berhasil Ditambahkan!
			</div>');
        redirect('artikel/index_admin');
    }
    public function hapus($id)
    {
        $where = array('id' => $id);
        $this->M_divisi->hapus_data($where, 'divisi_proker');
        $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        Data Berhasil Dihapus!</div>');
        redirect('divisi_proker');
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

    public function edit($id)
    {
        // $data = array(
        //     'title' => 'Edit Data Artikel'
        // );

        $where = array('id' => $id);
        $data['title'] = 'Edit Data Artikel';
        $data['artikel'] = $this->Artikel_model->edit_data($where, 'tb_artikel')->result();
        $data['is_data_master'] = true;
        $data['is_artikel'] = true;
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('admin/artikel/edit_artikel', $data);
        $this->load->view('admin/templates/footer');
    }
}

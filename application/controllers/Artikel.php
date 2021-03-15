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
        $data['judul'] = 'Artikel - LDK Ishlah';

        // $get = $this->Artikel_model->get();

        // $data = array(
        //     'row' => $get,
        //     'judul' => 'Artikel - LDK Ishlah'
        // );

        $this->load->library('pagination');

        // config
        $config['base_url'] = 'http://localhost/ishlah-app/artikel/index';
        $config['total_rows'] = $this->Artikel_model->countAllArtikel();
        $config['per_page'] = 12;

        // styling
        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';

        $config['first_link'] = 'First';
        $config['first_tag_open'] = '<li class="page-item">';
        $config['first_tag_close'] = '</li>';

        $config['last_link'] = 'Last';
        $config['last_tag_open'] = '<li class="page-item">';
        $config['last_tag_close'] = '</li>';

        $config['next_link'] = 'Next';
        $config['next_tag_open'] = '<li class="page-item">';
        $config['next_tag_close'] = '</li>';

        $config['prev_link'] = 'Previous';
        $config['prev_tag_open'] = '<li class="page-item">';
        $config['prev_tag_close'] = '</li>';

        $config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
        $config['cur_tag_close'] = '</a></li>';

        $config['num_tag_open'] = '<li class="page-item">';
        $config['num_tag_close'] = '</li>';

        $config['attributes'] = array('class' => 'page-link');

        // initialize
        $this->pagination->initialize($config);

        $data['start'] = $this->uri->segment(3);
        $data['artikel'] = $this->Artikel_model->getArtikel($config['per_page'], $data['start']);

        $this->load->view('templates/header', $data);
        $this->load->view('artikel/index', $data);
        $this->load->view('templates/footer');
    }

    public function isiArtikel($slug)
    {

        $data['judul'] = 'Isi Artikel - LDK Ishlah';
        // $detail = $this->Artikel_model->detail_data($id);

        // $data['detail'] = $detail;

        $data['user'] = $this->db->get_where('user', ['username'])->row_array();
        $data['new_artikel'] = $this->db->query("SELECT *
                                                    FROM tb_artikel
                                                    ORDER BY rand()
                                                    LIMIT 3")->result();
        $this->load->view('templates/header', $data);

        $data = $this->Artikel_model->get_post_by_slug($slug);
        if ($data->num_rows() > 0) { // validasi jika data ditemukan
            $x['data'] = $data;
            $this->load->view('artikel/isiartikel', $x);
            $this->load->view('templates/footer');
        } else {
            //jika data tidak ditemukan, maka kembali ke blog
            redirect('artikel/index');
        }
    }
}

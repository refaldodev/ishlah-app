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
}

<?php

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // $this->load->model('Pendaftar_model');
        $this->load->model('Divisi_model');
        $this->load->model('Proker_model');
    }
    public function index()

    {

        $data2['judul'] = 'LDK Ishlah - Together Be Better';
        $get = $this->Divisi_model->get();
        $get2 = $this->Proker_model->get();
        // $data = array(
        //     'row' => $get,
        //     'row2' => $get2

        // );
        $data['row'] = $get;
        $data['row2'] = $get2;
        $data['new_artikel'] = $this->db->query("SELECT art.*,
                                                    art.judul_artikel as judul,
                                                    art.isi_artikel as isi,
                                                    art.post_by as nama,
                                                    art.cover_artikel as cover,
                                                    art.date_created as date_created
                                                    FROM tb_artikel art
                                                    ORDER BY art.date_created DESC
                                                    LIMIT 3")->result();

        $this->load->view('templates/header', $data2);
        $this->load->view('home/index', $data);
        $this->load->view('templates/footer');
    }
    public function tentangkami()
    {
        $data['judul'] = 'Tentang - LDK Ishlah';
        $this->load->view('templates/header', $data);
        $this->load->view('home/tentangkami', $data);
        $this->load->view('templates/footer');
    }
    public function faq()
    {
        $data['judul'] = 'Faq - LDK Ishlah';
        $this->load->view('templates/header', $data);
        $this->load->view('home/faq', $data);
        $this->load->view('templates/footer');
    }
    public function programkami()
    {
        $data['judul'] = 'Program Kami - LDK Ishlah';
        $this->load->view('templates/header', $data);
        $this->load->view('home/programkami', $data);
        $this->load->view('templates/footer', $data);
    }
}

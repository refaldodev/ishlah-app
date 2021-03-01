<?php
class Profil extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Struktur_model');
    }

    public function index()
    {
        $data['judul'] = 'Sejarah - LDK Ishlah';



        $this->load->view('templates/header', $data);
        $this->load->view('profil/sejarah', $data);
        $this->load->view('templates/footer');
    }

    public function visi()
    {
        $data['judul'] = 'Visi & Misi - LDK Ishlah ';
        $this->load->view('templates/header', $data);
        $this->load->view('profil/visi', $data);
        $this->load->view('templates/footer');
    }

    public function struktur()
    {
        $get = $this->Struktur_model->get();

        $data = array(
            'row' => $get,
            'judul' => 'Struktur - LDK Ishlah'
        );
        $this->load->view('templates/header', $data);
        $this->load->view('profil/struktur', $data);
        $this->load->view('templates/footer');
    }
}

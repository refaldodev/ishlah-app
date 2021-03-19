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
        // var_dump($this->db->last_query());
        // die();
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
    public function bantuan()
    {
        $data['judul'] = 'Bantuan - LDK Ishlah';
        $this->load->view('templates/header', $data);
        $this->load->view('home/bantuan', $data);
        $this->load->view('templates/footer');
    }


    public function programkami($slug)
    {
        $data['judul'] = 'Program Kami - LDK Ishlah';
        // $data['data'] = $this->db->get_where('isi_proker', ['id' => $id_proker])->row();
        // $detail = $this->Proker_model->detail_data($id_proker);

        // $data['detail'] = $detail;
        // $data['div'] = $this->db->get('divisi_proker')->result();
        // $data['divisi'] = $this->db->query("SELECT nama_divisi FROM divisi_proker");
        // $data['divisi1'] = $this->db->query("SELECT judul_proker, deskripsi_proker, cover_proker,
        //                                             divisi_proker.nama_divisi as nama_divisi
        //                                             FROM isi_proker
        //                                             INNER JOIN divisi_proker ON isi_proker.id_divisi_proker=divisi_proker.id
        //                                             WHERE isi_proker.id_divisi_proker=" . $id_proker . "")->result();
        $this->load->view('templates/header', $data);

        $data = $this->Proker_model->get_post_by_slug($slug);
        // $data['divisi'] = $this->db->query("SELECT * FROM divisi_proker INNER JOIN divisi_proker.id=isi_proker.id_divisi_proker")->resutl();
        if ($data->num_rows() > 0) { // validasi jika data ditemukan
            $x['data'] = $data;
            $this->load->view('home/programkami', $x);
            $this->load->view('templates/footer');
        } else {
            //jika data tidak ditemukan, maka kembali ke home
            redirect('home/index');
        }
    }
}

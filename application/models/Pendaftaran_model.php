<?php
class Pendaftaran_model extends CI_model
{
    private $table_name = 'tb_pendaftar';

    public function tambahDataPendaftar()
    {
        $data = [
            'nama' => htmlspecialchars($this->input->post('nama', true)),
            'email' => htmlspecialchars($this->input->post('email', true)),
            'gambar' => 'default.jpg',
            'password' => htmlspecialchars(password_hash($this->input->post('password1', true), PASSWORD_DEFAULT)),
            'no_telp' => htmlspecialchars($this->input->post('no_telp', true)),
            'tgl_lahir' => htmlspecialchars($this->input->post('tgl_lahir', true)),
            'jenis_kelamin' => htmlspecialchars($this->input->post('jenis_kelamin', true)),
            'jurusan' => htmlspecialchars($this->input->post('jurusan', true)),
            'fakultas' => htmlspecialchars($this->input->post('fakultas', true)),
            'angkatan' => htmlspecialchars($this->input->post('angkatan', true)),
            'motivasi' => htmlspecialchars($this->input->post('motivasi', true)),
            'role_id' => '2',
            'is_actived' => '1',
            'data_created' => time()


        ];
        $this->db->insert('users', $data);
    }

    public function get()
    {
        $this->db->select($this->table_name . '.*');
        $this->db->select('fak.nama_fakultas, prd.nama_prodi');
        $this->db->from($this->table_name);
        $this->db->join('tb_fakultas as fak', $this->table_name . '.id_fakultas=fak.id', 'INNER');
        $this->db->join('tb_prodi as prd', $this->table_name . '.id_prodi=prd.id', 'INNER');
        $this->db->order_by('date_created', 'asc');
        $query = $this->db->get();
        return $query->result();
    }

    public function hapus_data($id)
    {

        $this->db->where('id', $id);
        $this->db->delete('tb_pendaftar');
    }


    function get_prodi($id)
    {
        $query = $this->db->get_where('tb_prodi', array('id_fakultas' => $id));
        return $query;
    }
    function tambah_pendaftar($data)
    {
        $this->db->insert('tb_pendaftar', $data);
    }
}

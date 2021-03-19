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
        return $query;
    }
    public function getData()
    {
        $this->db->select('date_created, COUNT(id) as total');
        $this->db->group_by('date_created');
        $this->db->order_by('date_created', 'asc');
        return $this->db->get('tb_pendaftar')->result();
    }
    public function getDataPie()
    {
        $this->db->select('jkel, COUNT(jkel) as total');
        $this->db->group_by('jkel');
        $this->db->order_by('total', 'asc');
        return $this->db->get('tb_pendaftar')->result();
    }
    public function getDataTanggal($awal, $akhir)
    {
        $this->db->select('tb_pendaftar.*');
        $this->db->select('tb_fakultas.nama_fakultas, tb_prodi.nama_prodi');
        $this->db->from('tb_pendaftar');
        $this->db->join('tb_fakultas', 'tb_pendaftar.id_fakultas=tb_fakultas.id', 'INNER');
        $this->db->join('tb_prodi', 'tb_pendaftar.id_prodi=tb_prodi.id', 'INNER');
        $this->db->order_by('date_created', 'asc');
        $this->db->where('tb_pendaftar.date_created >=', $awal);
        $this->db->where('tb_pendaftar.date_created <=', $akhir);

        $query = $this->db->get();
        return $query;
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

    public function hapus_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
}

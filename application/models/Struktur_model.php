<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Struktur_model extends CI_Model
{
    private $primary_key = 'id';
    private $table_name = 'tb_struktur';

    public function get()
    {
        $query = $this->db->get($this->table_name);

        return $query->result();
    }



    public function get_by_id($kondisi)
    {
        $this->db->from('tb_struktur');
        $this->db->where($kondisi);
        $query = $this->db->get();
        return $query->row();
    }

    public function insert($data)
    {
        $this->db->insert('tb_struktur', $data);
        return TRUE;
    }
    public function delete($where)
    {
        $this->db->where($where);
        $this->db->delete('tb_struktur');
        return TRUE;
    }
    public function update($data, $kondisi)
    {
        $this->db->update('tb_struktur', $data, $kondisi);
        return TRUE;
    }
}

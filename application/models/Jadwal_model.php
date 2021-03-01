<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Jadwal_model extends CI_Model
{
    private $primary_key = 'id';
    private $table_name = 'tb_jadwal';

    public function get()
    {
        $query = $this->db->get($this->table_name);

        return $query->result();
    }
    public function tambah_data($data)
    {
        $this->db->insert($this->table_name, $data);
    }
    public function hapus_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
    public function edit_data($where, $table)
    {
        return $this->db->get_where($table, $where);
    }
    public function update_data($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }
}

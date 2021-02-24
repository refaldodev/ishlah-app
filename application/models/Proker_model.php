<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Proker_model extends CI_Model
{
    private $primary_key = 'id';
    private $table_name = 'isi_proker';

    public function get()
    {
        $this->db->select($this->table_name . '.*');
        $this->db->select('div.nama_divisi as nama_divisi');
        $this->db->from($this->table_name);
        $this->db->join('divisi_proker as div', $this->table_name . '.id_divisi_proker=div.id', 'INNER');

        $query = $this->db->get();

        return $query->result();
    }
    public function get2()
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

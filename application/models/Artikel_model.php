<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Artikel_model extends CI_Model
{
    private $primary_key = 'id';
    private $table_name = 'tb_artikel';

    public function get()
    {
        $query = $this->db->get($this->table_name);

        return $query->result();
    }

    public function detail_data($id = NULL)
    {
        $query = $this->db->get_where($this->table_name, array('id' => $id))->row();
        return $query;
    }
    public function get_post_by_slug($slug)
    {
        $query = $this->db->query("SELECT * FROM tb_artikel WHERE post_slug='$slug'");
        return $query;
    }

    public function get_by_id($kondisi)
    {
        $this->db->from('tb_artikel');
        $this->db->where($kondisi);
        $query = $this->db->get();
        return $query->row();
    }

    public function insert($data)
    {
        $this->db->insert('tb_artikel', $data);
        return TRUE;
    }
    public function delete($where)
    {
        $this->db->where($where);
        $this->db->delete('tb_artikel');
        return TRUE;
    }
    public function update($data, $kondisi)
    {
        $this->db->update('tb_artikel', $data, $kondisi);
        return TRUE;
    }

    public function getArtikel($limit, $start)
    {
        $query = $this->db->query("SELECT * FROM tb_artikel ORDER BY date_created DESC")->result_array();
        $query = $this->db->get('tb_artikel', $limit, $start)->result_array();
        return $query;
    }

    public function countAllArtikel()
    {
        return $this->db->get('tb_artikel')->num_rows();
    }
}

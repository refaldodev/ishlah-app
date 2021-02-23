<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Galeri_model extends CI_Model
{
    private $primary_key = 'id';
    private $table_name = 'tb_galeri';

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
    private function _uploadImage()
    {
        $config['upload_path']          = './assets/galeri';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['file_name']            = $this->image_galeri;
        $config['overwrite']            = true;
        $config['max_size']             = 1024; // 1MB
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('image')) {
            return $this->upload->data("file_name");
        }

        return "default.jpg";
    }

    public function get_by_id($kondisi)
    {
        $this->db->from('tb_galeri');
        $this->db->where($kondisi);
        $query = $this->db->get();
        return $query->row();
    }

    public function insert($data)
    {
        $this->db->insert('tb_galeri', $data);
        return TRUE;
    }
    public function delete($where)
    {
        $this->db->where($where);
        $this->db->delete('tb_galeri');
        return TRUE;
    }
    public function update($data, $kondisi)
    {
        $this->db->update('tb_galeri', $data, $kondisi);
        return TRUE;
    }
}

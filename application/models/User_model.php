<?php
class User_model extends CI_model
{
    private $table_name = 'user';

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
        $query = $this->db->get($this->table_name);

        return $query->result();
    }
    public function getUserId($id)
    {
        return $this->db->get_where('user', ['id' => $id])->row_array();
    }
    public function tambah($data)
    {
        // $this->db->insert($this->table_name, $data);
        $params['name'] = htmlspecialchars($data['name']);
        $params['username'] = htmlspecialchars($data['username']);
        $params['image'] = 'default.jpg';
        $params['password'] = htmlspecialchars(password_hash($data['password'], PASSWORD_DEFAULT));
        $params['level'] = htmlspecialchars($data['level']);
        $params['is_active'] = 1;
        $params['date_created'] = time();
        $this->db->insert('user', $params);
    }
    public function hapus_data($id)
    {

        $this->db->where('id', $id);
        $this->db->delete('user');
    }



    public function edit_data()
    {
        // $this->db->insert($this->table_name, $data);
        // $params['name'] = htmlspecialchars($post['name']);
        // $params['username'] = htmlspecialchars($post['username']);
        // $params['image'] = 'default.jpg';
        // $params['password'] = htmlspecialchars(password_hash($post['password'], PASSWORD_DEFAULT));
        // $params['level'] = htmlspecialchars($post['level']);
        // $params['date_created'] = time();
        $data = [
            "name" =>  $this->input->post('name', true),
            "username" =>  $this->input->post('username', true),
            "image" =>  'default.jpg',
            "password" =>  password_hash($this->input->post('password', true), PASSWORD_DEFAULT),
            "level" =>  $this->input->post('level', true),
            'date_created' => time()

        ];
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('user', $data);
    }


    public function edit_profile()
    {
        $data = [
            "name" =>  $this->input->post('name', true),
            "username" =>  $this->input->post('username', true),
            "image" =>  'default.jpg',
            "password" =>  password_hash($this->input->post('password', true), PASSWORD_DEFAULT),
            'date_created' => time()

        ];
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('user', $data);
    }

    public function update_data($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }
    public function keamanan()
    {
        $data = $this->session->userdata('username');
        if (empty($data)) {
            $this->session->sess_destroy();
            redirect('auth');
        }
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

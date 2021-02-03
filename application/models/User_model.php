<?php
class User_model extends CI_model
{

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
}

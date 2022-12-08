<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model
{
    public function getAllUser()
    {
        return $this->db->get('user')->result_array();
    }

    // public function tambahDataJabatan()
    // {
    //     $data = [
    //         'nama_jabatan' => html_escape($this->input->post('jabatan', true)),
    //         'gaji_pokok' => html_escape($this->input->post('gapok', true)),
    //         'tj_transport' => html_escape($this->input->post('tj_transport', true)),
    //         'uang_makan' => html_escape($this->input->post('uang_makan', true))
    //     ];

    //     $this->db->insert('jabatan', $data);
    // }

    public function getUserById($id)
    {
        return $this->db->get_where('user', ['id_user' => $id])->row_array();
    }

    public function editUser($data)
    {
        $id_user = $data['id_user'];
        $arr = [
            'username' => html_escape($data['username']),
            'password' => html_escape($data['password']),
            'role' => html_escape($data['role']),
            'foto_user' => html_escape($data['foto_user']),
            'status' => html_escape($data['status'])
        ];

        $this->db->where('id_user', $id_user);
        $this->db->update('user', $arr);
    }
}

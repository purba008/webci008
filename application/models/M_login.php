<?php
class M_login extends CI_Model{

    public function cek_data_user($username, $password)
    {
        # code...
        return $this->db->where('username', $username)
                        ->where('password', $password)
                        ->get('users');
    }
}
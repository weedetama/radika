<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mauth extends CI_Model
{
    public function cek_login()
    {
        $username   = set_value('username');
        $password   = set_value('password');

        $_result =  $this->db->where('username', $username)
            ->where('password', $password)
            ->limit(1)
            ->get('tb_user');

        if ($_result->num_rows() > 0) {
            return $_result->row();
        } else {
            return array();
        }
    }
}

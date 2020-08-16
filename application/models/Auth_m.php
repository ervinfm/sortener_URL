<?php defined('BASEPATH') or exit('No direct script access allowed');

class Auth_m extends CI_Model
{

    function auth_username($post)
    {
        $this->db->from('tb_user');
        $this->db->where('username_user', $post['username']);
        $query = $this->db->get();
        return $query;
    }

    function auth_password($post)
    {
        $this->db->from('tb_user');
        $this->db->where('password_user', sha1($post['password']));
        $query = $this->db->get();
        return $query;
    }
}

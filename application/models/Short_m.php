<?php defined('BASEPATH') or exit('No direct script access allowed');

class Short_m extends CI_Model
{

    function get($url)
    {
        $this->db->from('tb_sortener');
        $this->db->where('url_sortener', $url);
        $query = $this->db->get();
        return $query;
    }
}

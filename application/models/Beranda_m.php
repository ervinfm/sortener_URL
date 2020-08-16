<?php defined('BASEPATH') or exit('No direct script access allowed');

class Beranda_m extends CI_Model
{

    function get_url($url)
    {
        $this->db->from('tb_sortener');
        $this->db->where('url_asal', $url);
        $query = $this->db->get();
        return $query;
    }


    function insert($post)
    {
        $params = [
            'id_sortener' => random_string('nozero', 10) . '0' . date('dmy'),
            'id_user' => $this->session->userdata('userid'),
            'url_asal' => $post['url'],
            'url_sortener' => $post['sortener'],
        ];
        $this->db->insert('tb_sortener', $params);
    }

    function get_riwayat($id)
    {
        $this->db->from('tb_sortener');
        $this->db->where('id_user', $id);
        $query = $this->db->get();
        return $query;
    }

    function update($post)
    {
        $params = [
            'url_sortener' => $post['new'],
        ];
        $this->db->where('id_sortener', $post['id']);
        $this->db->update('tb_sortener', $params);
    }

    function delete($id)
    {
        $this->db->where('id_sortener', $id);
        $this->db->delete('tb_sortener');
    }

    function get_statistik($url)
    {
        $this->db->from('tb_statistik');
        $this->db->where('url_sortener', $url);
        $query = $this->db->get();
        return $query;
    }
}

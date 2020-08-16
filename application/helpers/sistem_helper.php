<?php

function login()
{
    $ci = &get_instance();
    if ($ci->session->userdata('userid') == null) {
        $ci->session->set_flashdata('username', 'Silahkan Login untuk Mengakses');
        redirect('auth');
    }
}

function profil()
{
    $ci = &get_instance();
    $query = $ci->db->get_where('tb_user', array('id_user' => $ci->session->userdata('userid')));
    return $query->row();
}

function set_statistik($url)
{
    $ci = &get_instance();
    $params = [
        'browser' => $ci->agent->browser() . '-' . $ci->agent->version(),
        'os' => $ci->agent->platform(),
        'url_sortener' => $url,
    ];
    $ci->db->insert('tb_statistik', $params);
}

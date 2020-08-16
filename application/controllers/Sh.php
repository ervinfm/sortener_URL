<?php defined('BASEPATH') or exit('No direct script access allowed');

class Sh extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('short_m');
    }

    function short($url)
    {
        $query = $this->short_m->get($url);
        if ($query->num_rows() > 0) {
            set_statistik($url);
            $data = $query->row();
            redirect($data->url_asal);
        } else {
            $this->load->view('not_found');
        }
    }
}

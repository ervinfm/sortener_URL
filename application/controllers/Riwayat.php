<?php defined('BASEPATH') or exit('No direct script access allowed');

class Riwayat extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        login();
        $this->load->helper('string');
    }

    public function index()
    {
        # code...
    }
}

<?php defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->helper('string');
        $this->load->model('beranda_m');
    }

    public function login()
    {
        $this->load->view('login');
    }

    function proses()
    {
        $post = $this->input->post(null, TRUE);
        if (isset($post['login'])) {
            $this->load->model('auth_m');
            $query = $this->auth_m->auth_username($post);
            if ($query->num_rows() > 0) {
                $query_pas = $this->auth_m->auth_password($post);
                if ($query_pas->num_rows() > 0) {
                    $row = $query->row();

                    $params = array(
                        'userid' => $row->id_user,
                        'username' => $row->username_user,
                        'email' =>  $row->email_user,
                    );
                    $this->session->set_userdata($params);

                    redirect('beranda/index');
                } else {
                    $this->session->set_flashdata('u-ser', $post['username']);
                    $this->session->set_flashdata('u-pas', $post['password']);
                    $this->session->set_flashdata('password', 'Maaf Password yang dimasukkan salah !!!');
                    redirect('auth/login');
                }
            } else {
                $this->session->set_flashdata('u-ser', $post['username']);
                $this->session->set_flashdata('u-pas', $post['password']);
                $this->session->set_flashdata('username', 'Maaf username yang dimasukkan salah !!!');
                redirect('auth/login');
            }
        }
    }

    function logout()
    {

        $params = array('userid', 'username', 'email');
        $this->session->unset_userdata($params);
        redirect('auth/login');
    }
}

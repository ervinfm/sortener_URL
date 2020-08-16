<?php defined('BASEPATH') or exit('No direct script access allowed');

class Beranda extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		login();
		$this->load->helper('string');
		$this->load->model('beranda_m');
	}

	public function index()
	{
		$post = $this->input->post(null, TRUE);
		if (isset($post['sort'])) {
			$row = $this->beranda_m->get_url($post['url']);
			if ($row->num_rows() == 0) {
				$post = [
					'url' => $post['url'],
					'sortener' => random_string('alnum', 8)
				];
				$this->beranda_m->insert($post);
				$this->template->load('template', 'beranda', $post);
			} else {
				$post = [
					'url' => $row->row()->url_asal,
					'sortener' => $row->row()->url_sortener,
					'created' => $row->row()->created_sortener
				];
				$this->template->load('template', 'beranda', $post);
				$this->session->set_flashdata('verifikasi', 'Url sudah terdaftar sebelumnya, silahkan masuk ke riwayat dan perbaharui sortener');
			}
		} else {
			$this->template->load('template', 'beranda');
		}
	}

	public function riwayat()
	{
		$data['row'] = $this->beranda_m->get_riwayat($this->session->userdata('userid'));
		$this->template->load('template', 'riwayat', $data);
	}

	function update()
	{
		$post = $this->input->post(null, TRUE);
		if (isset($post['renew'])) {
			$this->beranda_m->update($post);
			if ($this->db->affected_rows() > 0) {
				$this->session->set_flashdata('succes', 'Data Berhasil DIperbaharui');
			}
			redirect('beranda/riwayat');
		} else {
			redirect('beranda/riwayat');
		}
	}

	function delete($id)
	{
		$this->beranda_m->delete($id);
		if ($this->db->affected_rows() > 0) {
			$this->session->set_flashdata('succes', 'Data Berhasil Dihapus');
		}
		redirect('beranda/riwayat');
	}

	public function statistik($url)
	{
		$data['row'] = $this->beranda_m->get_statistik($url);
		$this->template->load('template', 'statistik', $data);
	}
}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kontak extends CI_Controller {
	public function index()
	{
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['judul'] = 'Kontak Kami';
		$this->load->view('templates/header', $data);
		$this->load->view('user/kontak/index');
		$this->load->view('templates/footer');
	}
}

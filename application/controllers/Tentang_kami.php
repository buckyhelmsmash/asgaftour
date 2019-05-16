<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tentang_kami extends CI_Controller {
	public function index()
	{
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['judul'] = 'Tentang Kami';
		$this->load->view('templates/header', $data);
		$this->load->view('user/tentang/index');
		$this->load->view('templates/footer');
	}
}

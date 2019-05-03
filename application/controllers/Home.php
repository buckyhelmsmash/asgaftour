<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function index()
	{
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		

		$data['judul'] = 'Home';
		$this->load->view('user/_partials/header', $data);
		$this->load->view('user/home/index');
		$this->load->view('user/_partials/footer');
	}
}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Testimoni extends CI_Controller {
	public function index()
	{
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['judul'] = 'Testimonial';
		$this->load->view('templates/header', $data);
		$this->load->view('user/testimoni/index');
		$this->load->view('templates/footer');
	}
}

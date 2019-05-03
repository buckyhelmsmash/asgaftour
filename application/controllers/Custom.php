<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Custom extends CI_Controller {
	public function index()
	{
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['judul'] = 'Custom';
		$this->load->view('user/_partials/header', $data);
		$this->load->view('user/custom/index');
		$this->load->view('user/_partials/footer');
	}

	public function customtour()
	{
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['judul'] = 'malaysia';
		$this->load->view('user/_partials/header', $data);
		$this->load->view('user/custom/custom-tour', $data);
		$this->load->view('user/_partials/footer');
	}
}

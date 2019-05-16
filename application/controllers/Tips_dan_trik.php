<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tips_dan_trik extends CI_Controller {
	public function index()
	{
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['judul'] = 'Tips dan Trik';
		$this->load->view('templates/header', $data);
		$this->load->view('user/tips/index');
		$this->load->view('templates/footer');
    }
  
}

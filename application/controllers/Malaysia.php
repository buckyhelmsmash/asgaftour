<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Malaysia extends CI_Controller {
	public function index()
	{
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['judul'] = 'Malaysia Trip';
		$this->load->view('templates/header', $data);
		$this->load->view('user/malaysia/index');
		$this->load->view('templates/footer');
    }
    
    public function tambah()
    {
      $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['judul'] = 'Malaysia Trip | Pesan Trip';
        $this->load->view('templates/header', $data);
		$this->load->view('user/malaysia/tambah');
		$this->load->view('templates/footer');
    }
}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Paket extends CI_Controller {
	public function index()
	{
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['judul'] = 'Malaysia Trip';
		$this->load->view('user/_partials/header', $data);
		$this->load->view('user/paket/index');
		$this->load->view('user/_partials/footer');
    }
    
    public function tambah()
    {
      $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['judul'] = 'Malaysia Trip | Pesan Trip';
        $this->load->view('user/_partials/header', $data);
		$this->load->view('user/paket/tambah');
		$this->load->view('user/_partials/footer');
    }
}

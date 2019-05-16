<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tour extends CI_Controller {
    public function index()
    {

    }

    public function singapore()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['judul'] = 'Singapore';
		$this->load->view('templates/header', $data);
		$this->load->view('user/tour/paket-tour', $data);
		$this->load->view('templates/footer');
		
    }

}
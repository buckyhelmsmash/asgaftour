<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Hotel extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model("pegawai_model");
        $this->load->model("negara_model");
        $this->load->model("destinasi_model");
        $this->load->model("hotel_model");
    }

    public function add($id_negara)
    {
        $input = [
            'id_negara' => $id_negara,
            'nama_hotel' => $this->input->post('nama_hotel'),
            // 'gambar_destinasi' => 'default.jpg',
            // 'deskripsi' => $this->input->post('deskripsi')
        ];
        $this->db->insert('hotel', $input);
        redirect('admin/negara/detail/' . $id_negara);
    }
}

/* End of file Hotel.php */

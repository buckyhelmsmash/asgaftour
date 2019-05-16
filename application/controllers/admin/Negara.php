<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Negara extends CI_Controller
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

    public function index()
    {
        $data['admin'] = $this->db->get_where('admin', ['username' =>
        $this->session->userdata('username')])->row_array();

        $data["list_negara"] = $this->negara_model->getAll();
        $this->load->view('admin/listnegara', $data);
    }

    public function add()
    {
        $data['admin'] = $this->db->get_where('admin', ['username' =>
        $this->session->userdata('username')])->row_array();

        $this->form_validation->set_rules('nama_negara', 'Nama Negara', 'required|trim');
        $this->form_validation->set_rules('gambar_negara', 'Gambar Negara', 'required');
        if ($this->form_validation->run() == false) {
            $data['title'] = 'Login Admin';
            $this->load->view('admin/addnegara', $data);
        } else {
            // $negara->save();
            $this->negara_model->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }


        $this->load->view('admin/addnegara', $data);
    }

    public function detail($id = null)
    {
        $data['admin'] = $this->db->get_where('admin', ['username' =>
        $this->session->userdata('username')])->row_array();
        $data["detail_negara"] = $this->negara_model->getByid($id);
        // var_dump($data);
        $data["destinasi"] = $this->destinasi_model->getByidnegara($id);
        $data["hotel"] = $this->hotel_model->getByidnegara($id);
        // var_dump($asd);
        // die;
        $this->load->view('admin/detailnegara', $data);
    }
}
?>
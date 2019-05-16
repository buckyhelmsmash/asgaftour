<?php defined('BASEPATH') or exit('No direct script access allowed');

class Negara_model extends CI_Model
{
    //Nama Tabel
    private $_table = "negara_tujuan";

    //Kolom pada Tabel
    public $id_negara;
    public $nama_negara;
    public $gambar_negara;

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function getByid($id)
    {
        return $this->db->get_where($this->_table, ["id_negara" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->nama_negara = $post["nama_negara"];
        $this->gambar_negara = $this->_uploadImage();
        $this->db->insert($this->_table, $this);
    }

    private function _uploadImage()
    {
        $config['upload_path']          = './upload/negara/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['file_name']            = $this->nama_negara;
        $config['overwrite']            = true;
        $config['max_size']             = 1024; // 1MB
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('gambar_negara')) {
            return $this->upload->data("file_name");
        } else {
            return "default.jpg";
        }
    }
}

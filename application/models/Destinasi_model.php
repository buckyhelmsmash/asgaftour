<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Destinasi_model extends CI_Model
{

    private $_table = "destinasi_tujuan";
    public  $id_destinasi;
    public  $id_negara;
    public  $nama_destinasi;
    public  $gambar_destinasi;
    public  $deskripsi;

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function getByidnegara($id)
    {
        // $this->db->get($this->_table);
        // $this->db->where('id_negara', $id);
        $query = $this->db->query("SELECT * from destinasi_tujuan WHERE id_negara = $id");
        return $query->result();
    }
}

/* End of file Destinasi_model.php */

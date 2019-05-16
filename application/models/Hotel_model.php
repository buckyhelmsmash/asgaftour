<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Hotel_model extends CI_Model
{

    private $_table = "hotel";
    public  $id_hotel;
    public  $id_negara;
    public  $nama_hotel;
    public  $grade;


    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function getByidnegara($id)
    {
        // $this->db->get($this->_table);
        // $this->db->where('id_negara', $id);
        $query = $this->db->query("SELECT * from hotel WHERE id_negara = $id");
        return $query->result();
    }
}

/* End of file Hotel_model.php */

<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Pegawai_model extends CI_Model
{

    private $_table = "admin";
    public  $nama;
    public  $email;
    public  $username;
    public  $password;
    public  $foto;
    public  $no_hp;
    public  $no_ktp;
    public  $foto_ktp;
    public  $role_id;
    public  $is_active;
    public  $date_created;

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
}

/* End of file Pegawai.php */

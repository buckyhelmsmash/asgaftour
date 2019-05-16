<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Pegawai extends CI_Controller
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

        $data['pegawai'] = $this->pegawai_model->getAll();

        $this->load->view('admin/pegawai', $data);
    }

    public function add()
    {
        $data = array('success' => false, 'messages' => array());
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[admin.email]');
        $this->form_validation->set_error_delimiters('<p class="text-danger">', '</p>');

        if ($this->form_validation->run()) {
            $data['success'] = true;
            $input = [
                'nama' => htmlspecialchars($this->input->post('nama'), true),
                'username' => htmlspecialchars($this->input->post('username'), true),
                'email' => htmlspecialchars($this->input->post('email'), true),
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'foto' => 'default.jpg',
                'no_hp' => 0,
                'no_ktp' => 0,
                'foto_ktp' => 0,
                'role_id' => 2,
                'is_active' => 0,
                'date_created' => time()

            ];
            $this->db->insert('admin', $input);
            $this->_sendmail($this->input->post('email'));
        } else {
            foreach ($_POST as $key => $value) {
                $data['messages'][$key] = form_error($key);
            }
        }

        echo json_encode($data);
    }

    private function _sendmail($target)
    {
        $config = [
            'protocol' =>   'smtp',
            'smtp_host' =>  'ssl://smtp.googlemail.com',
            'smtp_user' =>  'asegaftour@gmail.com',
            'smtp_pass' =>  'asegaf123',
            'smtp_port' =>  465,
            'mailtype'  =>  'html',
            'charset'   =>  'utf-8',
            'newline'   =>  "\r\n"
        ];
        $this->load->library('email', $config);
        $this->email->initialize($config);

        $this->email->from('asegaftour@gmail.com', 'Asgaftour');
        $this->email->to($target);
        $this->email->subject('Pendaftaran Admin Asgaftour');
        $this->email->message('Link Pendaftaran Admin: <a href="' . base_url() . 'admin/register?email=' . $target . '">Daftar</a>');


        $this->email->send();
    }
}

/* End of file Pegawai.php */

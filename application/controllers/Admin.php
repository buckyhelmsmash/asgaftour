<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
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
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        if ($this->form_validation->run() == false) {
            $data['title'] = 'Login Admin';
            $this->load->view('admin/auth/login', $data);
        } else {
            $this->_login();
        }
    }

    public function register()
    {
        $email = $this->input->get('email');
        $user = $this->db->get_where('admin', ['email' => $email])->row_array();

        if ($user) {
            $this->form_validation->set_rules('username', 'Username', 'required|trim|is_unique[admin.username]', [
                'required' => 'Username wajib diisi'
            ]);
            $this->form_validation->set_rules('password1', 'Password', 'required|min_length[4]|matches[password2]', [
                'required' => 'Password wajib diisi',
                'matches' => 'Password tidak sama',
                'min_length' => 'Password Minimal 4'
            ]);
            $this->form_validation->set_rules(
                'password2',
                'Password',
                'required|matches[password2]'
            );


            if ($this->form_validation->run() == false) {
                $data['title'] = 'Registrasi Admin';
                $data['email'] = $email;
                $data['nama'] = $user['nama'];
                $this->load->view('admin/auth/register', $data);
            } else {
                $data = [
                    'username' => htmlspecialchars($this->input->post('username'), true),
                    'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                    'is_active' => 1,
                    'date_created' => time()

                ];
                // $this->db->insert('admin', $data);
                $this->db->where('email', $email);
                $this->db->update('admin', $data);
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Akun berhasil dibuat siahkan login!</div>');
                redirect('admin');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">404!</div>');
            redirect('admin');
        }
    }

    private function _login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $user = $this->db->get_where('admin', ['username' => $username])->row_array();

        if ($user) {
            if ($user['is_active'] == 1) {
                if (password_verify($password, $user['password'])) {
                    $data = [
                        'username' => $user['username'],
                        'role_id' => $user['role_id']
                    ];

                    $this->session->set_userdata($data);
                    $this->dashboard();
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Username atau Password tidak cocok!</div>');
                    redirect('admin');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert">Cek email anda untuk aktifasi akun!</div>');
                redirect('admin');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Username atau Password tidak cocok!</div>');
            redirect('admin');
        }
    }

    public function logout()
    {

        $this->session->unset_userdata('username');
        $this->session->unset_userdata('role_id');

        $this->session->set_flashdata('message', '<div class="alert alert-primary" role="alert">Anda telah Logout</div>');
        redirect('admin');
    }

    public function dashboard()
    {
        $data['admin'] = $this->db->get_where('admin', ['username' =>
        $this->session->userdata('username')])->row_array();

        // echo 'Welcome ' . $data['admin']['nama'];
        $this->load->view('admin/index', $data);
    }

    public function listnegara()
    {
        $data['admin'] = $this->db->get_where('admin', ['username' =>
        $this->session->userdata('username')])->row_array();

        $data["list_negara"] = $this->negara_model->getAll();
        $this->load->view('admin/listnegara', $data);
    }

    public function negara($id = null)
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
    public function tambahnegara()
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

    public function pegawai()
    {
        $data['admin'] = $this->db->get_where('admin', ['username' =>
        $this->session->userdata('username')])->row_array();

        $data['pegawai'] = $this->pegawai_model->getAll();

        $this->load->view('admin/pegawai', $data);
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
        $this->email->message('Link Pendaftaran Admin: <a href="' . base_url() . 'admin/regsiter?email=' . $target . '">Daftar</a>');


        $this->email->send();
    }
    public function addpegawai()
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
    public function addwisata($id_negara)
    {
        $input = [
            'id_negara' => $id_negara,
            'nama_destinasi' => $this->input->post('nama_destinasi'),
            'gambar_destinasi' => 'default.jpg',
            'deskripsi' => $this->input->post('deskripsi')
        ];
        $this->db->insert('destinasi_tujuan', $input);
        redirect('admin/negara/' . $id_negara);
    }
    public function addhotel($id_negara)
    {
        $input = [
            'id_negara' => $id_negara,
            'nama_hotel' => $this->input->post('nama_hotel'),
            // 'gambar_destinasi' => 'default.jpg',
            // 'deskripsi' => $this->input->post('deskripsi')
        ];
        $this->db->insert('hotel', $input);
        redirect('admin/negara/' . $id_negara);
    }
}

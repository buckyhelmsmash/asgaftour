<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth_user extends CI_Controller {
    public function index()
    {

        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email', [
            'valid_email' => 'Field ini harus berisi email!',
            'required' => 'Email harus di isi!'
        ]);
        $this->form_validation->set_rules('password', 'Password', 'required|trim', [
            'min_length' => 'Password minimal 8 karakter',
            'required' => 'Password harus di isi!'
        ]);

        if($this->form_validation->run() == false) {
            $data['title'] = 'Login';
            $this->load->view('auth/_partials/auth_header', $data);
            $this->load->view('auth/login');
            $this->load->view('auth/_partials/auth_footer');            
        } else {
            // Validasinya berhasil
            $this->_login();
        }
    }

    private function _login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $user = $this->db->get_where('user', ['email' => $email])->row_array();

        //  jika usernya ada
        if($user) {
            // jika usernya aktif
            if($user['is_active'] == 1) {
                // cek password
                if(password_verify($password, $user['password'])) {
                    $data = [
                        'email' => $user['email'],
                        'role_id' => $user['role_id']
                    ];

                    $this->session->set_userdata($data);
                    if($user['role_id'] == 1) {
                        redirect('admin');
                    } else {
                        redirect('home');
                    }
                } else {
                    $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Password Salah!</div>');
                    redirect('auth');
                }
            } else {
                $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Email Belum di Aktivasi!</div>');
                redirect('auth');
            }
        } else {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Email Belum di Registrasi!</div>');
            redirect('auth');
        }
    }
    
    public function registration()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim', [
            'required' => 'Nama harus di isi!'
        ]);
        $this->form_validation->set_rules('hp', 'No HP', 'required|trim|numeric|max_length[13]', [
            'required' => 'No HP harus di isi!',
            'numeric' => 'No HP harus angka!',
            'min_length' => 'No HP maksimal 13 number'
        ]);
        $this->form_validation->set_rules('ktp', 'No KTP', 'required|trim|numeric|max_length[16]', [
            'required' => 'No KTP harus di isi!',
            'numeric' => 'No KTP harus angka!',
            'min_length' => 'No KTP maksimal 16 number'
        ]);
        $this->form_validation->set_rules('passpor', 'No Passpor', 'required|trim|alpha_numeric|max_length[9]', [
            'required' => 'No Passpor harus di isi!',
            'min_length' => 'No Passpor maksimal 9 karakter'
        ]);        
        $this->form_validation->set_rules('tgl_lahir', 'Tanggal Lahir', 'required|trim', [
            'required' => 'Tanggal Lahir harus di isi!',
        ]);
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
            'is_unique' => 'Email ini sudah di registrasi!',
            'valid_email' => 'Field ini harus berisi email!',
            'required' => 'Email harus di isi!'
        ]);
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[8]|matches[password2]', [
            'matches' => 'Password tidak sama!',
            'min_length' => 'Password minimal 8 karakter',
            'required' => 'Password harus di isi!'
        ]);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');
        
        if($this->form_validation->run() == false) {
            $data['title'] = 'Registrasi';
            $this->load->view('auth/_partials/auth_header', $data);
            $this->load->view('auth/registration');
            $this->load->view('auth/_partials/auth_footer');
        } else {
            $data = [
                'nama' =>  htmlspecialchars($this->input->post('nama', true)), 
                'hp' =>  htmlspecialchars($this->input->post('hp', true)), 
                'ktp' =>  htmlspecialchars($this->input->post('ktp', true)), 
                'passpor' =>  htmlspecialchars($this->input->post('passpor', true)), 
                'tgl_lahir' =>  htmlspecialchars($this->input->post('tgl_lahir', true)), 
                'email' =>  htmlspecialchars($this->input->post('email', true)), 
                'image' =>  'default.jpg', 
                'password' =>  password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'role_id' => 2,
                'is_active' => 1,
                'date_created' => time()
            ];

            $this->db->insert('user', $data);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Selamat Registrasi Berhasil! Silahkan Login</div>');
            redirect('auth');

        }
    }

    public function logout() 
    {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role_id');

        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Logout Berhasil!</div>');
        redirect('home');
    }
}
<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Mauth');
    }

    public function login()
    {
        $this->form_validation->set_rules('username', 'Username', 'required', ['required' => 'Username wajib di isi']);
        $this->form_validation->set_rules('password', 'Password', 'required', ['required' => 'Password wajib di isi']);
        if ($this->form_validation->run() == false) {
            $this->load->view('template/user_header');
            $this->load->view('template/user_topbar');
            $this->load->view('auth/login');
            $this->load->view('template/user_footer');
        } else {
            $auth = $this->Mauth->cek_login();
            if ($auth == false) {
                $this->session->set_flashdata('pesan', ' <div class="alert alert-warning" role="alert">
                <strong>Username atau Password</strong> Anda Salah!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                </div>');
                redirect('auth/login');
            } else {
                $this->session->set_userdata('username', $auth->username);
                $this->session->set_userdata('role_id', $auth->role_id);
                switch ($auth->role_id) {
                    case 1:
                        redirect('dashboard');
                        break;
                    case 2:
                        redirect('home');
                        break;
                    default:
                        break;
                }
            }
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('home');
    }
}

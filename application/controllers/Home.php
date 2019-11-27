<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('role_id') == '1') {
            redirect('dashboard');
        }
    }
    public function index()
    {
        $this->load->view('template/user_header');
        $this->load->view('template/user_topbar');
        $this->load->view('user/home');
        $this->load->view('template/user_footer');
    }
}

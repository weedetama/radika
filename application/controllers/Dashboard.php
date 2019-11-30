<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Mnotif');
        $this->load->model('Minvoice');
        if ($this->session->userdata('role_id') != '1') {
            redirect('home');
        }
    }

    public function index()
    {
        $data['notif'] = $this->Mnotif->Notification();
        $data['invoice'] = $this->Minvoice->tampilData();
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('template/topbar', $data);
        $this->load->view('admin/dashboard');
        $this->load->view('template/footer');
    }
}

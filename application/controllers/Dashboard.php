<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Mnotif');
        $this->load->model('Mitem');
        $this->load->model('Mcategory');
        $this->load->model('Minvoice');
        if ($this->session->userdata('role_id') != '1') {
            redirect('home');
        }
    }

    public function index()
    {
        $data['notif'] = $this->Mnotif->Notification();
        $data['barang'] = $this->Mitem->getStok();
        $data['category'] = $this->db->get('tb_category')->result_array();
        $data['invoice'] = $this->Minvoice->getTanggal();
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('template/topbar', $data);
        $this->load->view('admin/dashboard', $data);
        $this->load->view('template/footer');
    }
}

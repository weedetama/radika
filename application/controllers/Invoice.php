<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Invoice extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Minvoice');
        if ($this->session->userdata('role_id') != '1') {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            Anda belum Login !
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>');
            redirect('auth/login');
        }
    }
    public function index()
    {
        $data['invoice'] = $this->Minvoice->tampilData();
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('template/topbar');
        $this->load->view('admin/invoice', $data);
        $this->load->view('template/footer');
    }

    public function detail($idinvoice)
    {
        $data['invoice'] = $this->Minvoice->detailInvoice($idinvoice);
        $data['pesanan'] = $this->Minvoice->detailPesanan($idinvoice);
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('template/topbar');
        $this->load->view('admin/dinvoice', $data);
        $this->load->view('template/footer');
    }
}

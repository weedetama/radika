<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kategori extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Mcategory');
    }
    // Kategori Pertanian
    public function pertanian()
    {
        $data['pertanian'] = $this->Mcategory->dataPertanian()->result();
        $this->load->view('template/user_header');
        $this->load->view('template/user_topbar');
        $this->load->view('user/pertanian', $data);
        $this->load->view('template/user_footer');
    }

    // Kategori Peternakan
    public function peternakan()
    {
        $data['peternakan'] = $this->Mcategory->dataPeternakan()->result();
        $this->load->view('template/user_header');
        $this->load->view('template/user_topbar');
        $this->load->view('user/peternakan', $data);
        $this->load->view('template/user_footer');
    }
}

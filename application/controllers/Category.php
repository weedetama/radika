<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Category extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Mcategory');
    }

    public function index()
    {
        $data['title'] = 'Kategori';

        $data['category'] = $this->db->get('tb_category')->result_array();
        $data['categoryy'] = $this->db->get('tb_category')->row_array();

        $this->form_validation->set_rules('category', 'Category', 'required', ['required' => 'Kategori wajib di isi']);
        if ($this->form_validation->run() == false) {
            $this->load->view('template/header', $data);
            $this->load->view('template/sidebar');
            $this->load->view('template/topbar');
            $this->load->view('admin/item/category');
            $this->load->view('template/footer');
        } else {
            $this->Mcategory->tambahCategory();
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Kategori berhasil ditambahkan !</div>');
            redirect('category');
        }
    }
    // Controller Edit
    public function edit($id)
    {
        $data['title'] = ' Edit Category ';

        $data['category'] = $this->db->get_where('tb_category', ['id' => $id])->row_array();

        $this->form_validation->set_rules('category', 'Category', 'required', ['required' => 'Kategori wajib di isi']);
        if ($this->form_validation->run() == false) {
            $this->load->view('template/header', $data);
            $this->load->view('template/sidebar');
            $this->load->view('template/topbar');
            $this->load->view('admin/item/categoryedit', $data);
            $this->load->view('template/footer');
        } else {
            $this->Mcategory->ubahCategory();
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Kategori berhasil diubah</div>');
            redirect('category');
        }
    }
    //Controller Delete 
    public function delete($id)
    {
        $this->Mcategory->hapusCategory($id);
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Kategori berhasil dihapus</div>');
        redirect('category');
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

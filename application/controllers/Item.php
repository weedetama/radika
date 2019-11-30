<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Item extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Mitem');
        if ($this->session->userdata('role_id') != '1') {
            $this->session->set_flashdata('pesan', ' <div class="alert alert-warning" role="alert">
                Anda belum <strong>login!</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                </div>');
            redirect('auth/login');
        }
    }

    public function index()
    {
        $data['title'] = ' Data Barang';
        $data['notif'] = $this->Mnotif->Notification();
        $data['subCategory'] = $this->Mitem->getKategori();
        $data['category'] = $this->db->get('tb_category')->result();
        $data['barang'] = $this->Mitem->tampilBarang()->result();
        // --REQUIRED
        $this->form_validation->set_rules('nama', 'Nama', 'required', ['required' => 'Nama barang harus di isi!']);
        $this->form_validation->set_rules('keterangan', 'Keterangan', 'required', ['required' => 'Keterangan harus di isi!']);
        $this->form_validation->set_rules('kategori', 'Kategori', 'required', ['required' => 'Kategori harus di isi!']);
        $this->form_validation->set_rules('harga', 'Harga', 'required', ['required' => 'Harga harus di isi!']);
        $this->form_validation->set_rules('stok', 'Stok', 'required', ['required' => 'Stok harus di isi!']);
        if (empty($_FILES['gambar']['name'])) {
            $this->form_validation->set_rules('gambar', 'Gambar', 'required', ['required' => 'Gambar harus di isi!']);
        }

        if ($this->form_validation->run() == false) {
            $this->load->view('template/header');
            $this->load->view('template/sidebar');
            $this->load->view('template/topbar', $data);
            $this->load->view('admin/item/items', $data);
            $this->load->view('template/footer');
        } else {
            $nama       = $this->input->post('nama');
            $keterangan = $this->input->post('keterangan');
            $kategori   = $this->input->post('kategori');
            $harga      = $this->input->post('harga');
            $stok       = $this->input->post('stok');
            $gambar     = $_FILES['gambar']['name'];
            if ($gambar = '') { } else {
                $config['upload_path'] = './uploads';
                $config['allowed_types'] = 'jpg|jpeg|png';
                $this->load->library('upload', $config);
                if (!$this->upload->do_upload('gambar')) {
                    echo "Gambar Gagal Di upload";
                } else {
                    $gambar = $this->upload->data('file_name');
                }
            }
            $data = array(
                'nama'          => $nama,
                'keterangan'    => $keterangan,
                'kategori'      => $kategori,
                'harga'         => $harga,
                'stok'          => $stok,
                'gambar'        => $gambar
            );
            $this->Mitem->tambahBarang($data, 'tb_barang');
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data barang berhasil ditambahkan !</div>');
            redirect('item');
        }
    }

    // Controller Edit
    public function edit($id)
    {
        $data['title'] = 'Edit Barang';
        $data['notif'] = $this->Mnotif->Notification();
        $where = array('id' => $id);
        $data['subCategory'] = $this->Mitem->getKategori();
        $data['category'] = $this->db->get('tb_category')->result();
        $data['barang'] = $this->Mitem->ubahBarang($where, 'tb_barang')->result();

        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('template/topbar', $data);
        $this->load->view('admin/item/itemedit', $data);
        $this->load->view('template/footer');
    }
    // Controller Update
    public function update()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required', ['required' => 'Nama barang harus di isi!']);
        $this->form_validation->set_rules('keterangan', 'Keterangan', 'required', ['required' => 'Keterangan harus di isi!']);
        $this->form_validation->set_rules('kategori', 'Kategori', 'required', ['required' => 'Kategori harus di isi!']);
        $this->form_validation->set_rules('harga', 'Harga', 'required', ['required' => 'Harga harus di isi!']);
        $this->form_validation->set_rules('stok', 'Stok', 'required', ['required' => 'Stok harus di isi!']);

        $id         = $this->input->post('id');
        $nama       = $this->input->post('nama');
        $keterangan = $this->input->post('keterangan');
        $kategori   = $this->input->post('kategori');
        $harga      = $this->input->post('harga');
        $stok       = $this->input->post('stok');

        $data = array(
            'nama' => $nama,
            'keterangan' => $keterangan,
            'kategori' => $kategori,
            'harga' => $harga,
            'stok' => $stok,
        );
        $where = array(
            'id' => $id
        );
        $this->Mitem->perbaruiBarang($where, $data, 'tb_barang');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data barang berhasil diupdate</div>');
        redirect('item');
    }

    //Controller Delete
    public function delete($id)
    {
        $this->Mitem->hapusBarang($id);
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Data barang berhasil dihapus</div>');
        redirect('item');
    }
    // Controller Detail
    public function detail($id)
    {
        $data['notif'] = $this->Mnotif->Notification();
        $data['barang'] = $this->Mitem->detailBarang($id);
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('template/topbar', $data);
        $this->load->view('admin/item/itemdetail', $data);
        $this->load->view('template/footer');
    }
}

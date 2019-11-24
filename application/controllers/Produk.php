<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Produk extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Mitem');
    }

    public function index()
    {
        $data['barang'] = $this->Mitem->tampilBarang()->result();

        $this->load->view('template/user_header');
        $this->load->view('template/user_topbar');
        $this->load->view('user/produk', $data);
        $this->load->view('template/user_footer');
    }

    // ADD TO CART !!!!
    public function add($id)
    {
        $barang = $this->Mitem->find($id);
        $data = array(
            'id'    => $barang->id,
            'qty'   => 1,
            'price' => $barang->harga,
            // 'image' => $barang->gambar,
            'name'  => $barang->nama
        );
        $this->cart->insert($data);
        redirect('produk');
    }

    // READ CART
    public function cart()
    {
        $this->load->view('template/user_header');
        $this->load->view('template/user_topbar');
        $this->load->view('user/cart');
        $this->load->view('template/user_footer');
    }

    // Hapus semua data di cart
    public function delete()
    {
        $this->cart->destroy();
        redirect('produk/cart');
    }


    // remove cart-- (help me dong !!)
    // public function remove($id)
    // {
    //     $barang = $this->Mitem->find($id);
    //     $data = array(
    //         'id'    => $barang->id,
    //         'qty'   => 0,
    //         'price' => $barang->harga,
    //         'image' => $barang->gambar,
    //         'name'  => $barang->nama
    //     );
    //     $this->cart->update($data);
    //     redirect('user/cart');
    // }

    // Checkout / Pembayaran !
    public function checkout()
    {
        $this->load->view('template/user_header');
        $this->load->view('template/user_topbar');
        $this->load->view('user/pembayaran');
        $this->load->view('template/user_footer');
    }
}

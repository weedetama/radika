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
        $data['notif'] = $this->Mnotif->Notification();
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('template/topbar', $data);
        $this->load->view('admin/invoice/invoice', $data);
        $this->load->view('template/footer');
    }

    public function detail($idinvoice)
    {
        $data['notif'] = $this->Mnotif->Notification();
        $data['invoice'] = $this->Minvoice->detailInvoice($idinvoice);
        $data['pesanan'] = $this->Minvoice->detailPesanan($idinvoice);
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('template/topbar', $data);
        $this->load->view('admin/invoice/dinvoice', $data);
        $this->load->view('template/footer');
    }

    public function print($idinvoice)
    {
        $data['notif'] = $this->Mnotif->Notification();
        $data['invoice'] = $this->Minvoice->detailInvoice($idinvoice);
        $data['pesanan'] = $this->Minvoice->detailPesanan($idinvoice);
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('template/topbar', $data);
        $this->load->view('admin/invoice/invoiceprint', $data);
        $this->load->view('template/footer');
    }

    public function changeactive()
    {
        $id = $this->input->post('id');
        $data1 = [
            'status' => 1
        ];
        $data = [
            'status' => 0
        ];

        $result = $this->db->get_where('tb_invoice', ['id' => $id])->row_array();
        if ($result['status'] == 0) {
            $this->db->where('id', $id);
            $this->db->update('tb_invoice', $data1);
        } else {
            $this->db->where('id', $id);
            $this->db->update('tb_invoice', $data);
        }
    }

    public function delete($id)
    {
        $this->Minvoice->hapusInvoice($id);
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Data barang berhasil dihapus</div>');
        redirect('invoice');
    }
}

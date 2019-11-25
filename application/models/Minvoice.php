<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Minvoice extends CI_Model
{
    public function index()
    {
        date_default_timezone_set('Asia/Jakarta');
        $this->form_validation->set_rules('nama', 'Nama', 'required', ['required' => 'Nama barang harus di isi!']);
        $this->form_validation->set_rules('alamat', 'Alamat', 'required', ['required' => 'Alamat harus di isi!']);
        $this->form_validation->set_rules('kota', 'Kota', 'required', ['required' => 'Kota harus di isi!']);
        $this->form_validation->set_rules('kodepos', 'Kode Pos', 'required', ['required' => 'Kode Pos harus di isi!']);
        $this->form_validation->set_rules('notelf', 'No. Telefon', 'required', ['required' => 'No. Telefon harus di isi!']);
        $this->form_validation->set_rules('pengiriman', 'Jasa Pengiriman', 'required', ['required' => 'Jasa Pengiriman harus di isi!']);
        $this->form_validation->set_rules('bank', 'Bank', 'required', ['required' => 'Bank harus di isi!']);
        $this->form_validation->set_rules('catatan', 'Catatan', 'required', ['required' => 'Catatan harus di isi!']);
        if (empty($_FILES['buktifoto']['name'])) {
            $this->form_validation->set_rules('buktifoto', 'Bukti Upload', 'required', ['required' => 'Bukti Upload harus di isi!']);
        }

        if ($this->form_validation->run() == false) {
            $this->load->view('template/user_header');
            $this->load->view('template/user_topbar');
            $this->load->view('user/pembayaran');
            $this->load->view('template/user_footer');
        } else {
            $nama       = $this->input->post('nama');
            $alamat     = $this->input->post('alamat');
            $kota       = $this->input->post('kota');
            $kodepos    = $this->input->post('kodepos');
            $notelf     = $this->input->post('notelf');
            $pengiriman = $this->input->post('pengiriman');
            $bank       = $this->input->post('bank');
            $catatan    = $this->input->post('catatan');
            $buktifoto     = $_FILES['buktifoto']['name'];
            if ($buktifoto = '') { } else {
                $config['upload_path'] = './uploads/pembayaran';
                $config['allowed_types'] = 'jpg|jpeg|png';
                $this->load->library('upload', $config);
                if (!$this->upload->do_upload('buktifoto')) {
                    echo "Foto Gagal Di upload";
                } else {
                    $buktifoto = $this->upload->data('file_name');
                }
            }
            $invoice = array(
                'nama'          => $nama,
                'alamat'        => $alamat,
                'kota'          => $kota,
                'kodepos'       => $kodepos,
                'notelf'        => $notelf,
                'pengiriman'    => $pengiriman,
                'bank'          => $bank,
                'catatan'       => $catatan,
                'buktifoto'     => $buktifoto,
                'tgl_pesan'     => date('Y-m-d'),
                'jam_pesan'     => date('H:i:s'),
                'tgl_bayar'     => date('Y-m-d H:i:s', mktime(date('H'), date('i'), date('s'), date('m'), date('d') + 1, date('Y')))
            );
            $this->db->insert('tb_invoice', $invoice);
            $idinvoice = $this->db->insert_id();
            foreach ($this->cart->contents() as $item) {
                $data = array(
                    'idinvoice'  => $idinvoice,
                    'idbarang'   => $item['id'],
                    'namabarang' => $item['name'],
                    'jumlah'     => $item['qty'],
                    'harga'      => $item['price'],
                );
                $this->db->insert('tb_pesanan', $data);
            }
            return true;
        }
    }

    public function tampilData()
    {
        $result = $this->db->get('tb_invoice');
        if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return false;
        }
    }
}

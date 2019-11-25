<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Registrasi extends CI_Controller
{
    public function index()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required', [
            'required' => 'Nama harus di isi'
        ]);
        $this->form_validation->set_rules('username', 'Username', 'required', [
            'required' => 'Username harus di isi'
        ]);
        $this->form_validation->set_rules('password1', 'Password', 'required|matches[password2]', [
            'required'  => 'Password harus di isi',
            'matches'   => 'Password harus sama !'
        ]);
        $this->form_validation->set_rules('password2', 'Password', 'required|matches[password1]');
        if ($this->form_validation->run() == false) {
            $this->load->view('template/user_header');
            $this->load->view('template/user_topbar');
            $this->load->view('auth/registrasi');
            $this->load->view('template/user_footer');
        } else {
            $data = array(
                'id'        => '',
                'nama'      => $this->input->post('nama'),
                'username'  => $this->input->post('username'),
                'password'  => $this->input->post('password1'),
                'role_id'   => 2,
            );
            $this->db->insert('tb_user', $data);
            $this->session->set_flashdata('pesan', ' <div class="alert alert-success" role="alert">
                <strong>Akun berhasil dibuat </strong> Silakan login!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                </div>');
            redirect('registrasi');
        }
    }
}

<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Mcategory extends CI_Model
{

    public function getAllcategory()
    {
        return $this->db->get('tb_category')->result_array();
    }

    // Input Category
    public function tambahCategory()
    {
        $data = [
            "category" => $this->input->post('category', true)
        ];
        $this->db->insert('tb_category', $data);
    }
    // Delete Category
    public function hapusCategory($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('tb_category');
    }

    // Edit Category  
    public function ubahCategory()
    {
        $data = [
            "category" => $this->input->post('category', true)
        ];
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('tb_category', $data);
    }

    public function getCategorybyId($id)
    {
        return $this->db->get('tb_category', ['id' => $id])->row_array();
    }
    //Kategori Pertanian
    public function dataPertanian()
    {
        return $this->db->get_where("tb_barang", array('kategori' => 'Pertanian'));
    }

    // Kategori Peternakan
    public function dataPeternakan()
    {
        return $this->db->get_where("tb_barang", array('kategori' => 'Peternakan'));
    }
}

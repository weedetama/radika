<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Mitem extends CI_Model
{
    // ambil Kategori pada tabel kategori
    public function getKategori()
    {
        $query = "SELECT `tb_barang`.*, `tb_category`.`category`
        FROM `tb_barang` JOIN `tb_category`
        ON `tb_category`.`category` = `tb_barang`.`kategori`
        ORDER BY `tb_barang`.`kategori` ASC";

        return $this->db->query($query)->result();
    }
    // Read Barang admin
    public function tampilBarang()
    {
        return $this->db->get('tb_barang');
    }
    // Tambah Barang admin
    public function tambahBarang($data, $table)
    {
        $this->db->insert($table, $data);
    }
    // Hapus Barang admin
    public function hapusBarang($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('tb_barang');
    }

    // Edit Barang admin
    public function ubahBarang($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    // Update Barang
    public function perbaruiBarang($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    // Detail Barang admin
    public function detailBarang($id)
    {
        $result = $this->db->where('id', $id)->get('tb_barang');
        if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return false;
        }
    }

    // find id barang (produk) untuk user
    public function find($id)
    {
        $result = $this->db->where('id', $id)
            ->limit(1)
            ->get('tb_barang');
        if ($result->num_rows() > 0) {
            return $result->row();
        } else {
            return array();
        }
    }

    public function getStok()
    {
        $query = "SELECT `tb_barang`.*
        FROM `tb_barang`
        ORDER BY `tb_barang`.`stok` ASC";
        return $this->db->query($query)->result();
    }
}

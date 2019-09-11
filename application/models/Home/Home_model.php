<?php

class Home_model extends CI_Model
{
    public function getAllProdukByBaru()
    {
        $getAllProduk = $this->db->get_where('daftar_produk');
        if ($getAllProduk->num_rows() > 0) {
            return $getAllProduk->result_array();
        } else {
            return false;
        }
    }

    public function getProdukById($id)
    {
        return $this->db->get_where('daftar_produk', ['id' => $id])->row_array();
    }
}

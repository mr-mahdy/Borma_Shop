<?php

class AdminModel extends CI_Model
{
    public function login($user, $pass)
    {
        $data = [
            'username' => $user,
            'password'  => $pass
        ];
        $check_user = $this->db->get_where('admin', $data);
        if ($check_user->num_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function insertNamaProduk()
    {
        $namaProduk = $this->input->post('nama_produk');
        $cek = $this->db->get_where('item', ['nama_item' => $namaProduk]);
        if ($cek->num_rows() > 0) {
            return false;
        } else {
            $this->db->insert('item', ['nama_item' => $namaProduk]);

            return $this->db->affected_rows();
        }
    }

    public function getAllProduk()
    {
        $getProduk = $this->db->select()->from('item')->get();
        if ($getProduk->num_rows() > 0) {
            return $getProduk->result();
        } else {
            return $getProduk->result();
        }
    }

    public function insertNamaBrand()
    {
        $namaBrand = $this->input->post('nama_brand');
        $idItem = $this->input->post('id_item');
        $cek = $this->db->get_where('brand', ['nama_brand' => $namaBrand, 'id_item' => $idItem]);
        if ($cek->num_rows() > 0) {
            return false;
        } else {
            $this->db->insert('brand', ['nama_brand' => $namaBrand, 'id_item' => $idItem]);

            return $this->db->affected_rows();
        }
    }

    public function countAllPenjual()
    {
        $countPenjual = $this->db->get('penjual')->result_array();
        return count($countPenjual);
    }

    public function countAllProduk()
    {
        $countProduk = $this->db->get('daftar_produk')->result_array();
        return count($countProduk);
    }

    public function getAllPenjual()
    {
        $getAllPenjual = $this->db->get('penjual')->result_array();

        return $getAllPenjual;
    }

    public function verifikasiPenjual($id)
    {
        $penjual = $this->db->get_where('penjual', ['id' => $id]);
        if ($penjual->num_rows() > 0) {
            $this->db->update('penjual', ['verifikasi' => 'Iya'], ['id' => $id]);
        }
        return $this->db->affected_rows();
    }

    public function deletePenjual($id)
    {
        $penjual = $this->db->get_where('penjual', ['id' => $id]);
        if ($penjual->num_rows() > 0) {
            $this->db->delete('penjual', ['id' => $id]);
        }
        return $this->db->affected_rows();
    }
}

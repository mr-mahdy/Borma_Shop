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
    public function getAllProduk()
    {
        return $this->db->get_where('daftar_produk')->result_array();
    }

    public function getPenjualById($id)
    {
        return $this->db->get_where('user', ['id' => $id])->row_array();
    }

    public function registration()
    {
        $name = $this->input->post('name', true);
        $email = $this->input->post('email', true);
        $pass = password_hash($this->input->post('password', true), PASSWORD_DEFAULT);

        $data = array(
            'name'         => $name,
            'email'             => $email,
            'image'             => 'default.jpg',
            'password'          => $pass,
            'role_id'           => 1,
            'is_active'         => 1,
            'date_created'      => date('d-m-Y'),
        );

        $this->db->insert('user', $data);
    }
}

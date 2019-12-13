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

    public function registration2()
    {
        $name = $this->input->post('name', true);
        $email = $this->input->post('email', true);
        $pass = password_hash($this->input->post('password', true), PASSWORD_DEFAULT);

        $data = array(
            'name'         => $name,
            'email'             => $email,
            'image'             => 'default.jpg',
            'password'          => $pass,
            'role_id'           => 2,
            'is_active'         => 1,
            'date_created'      => date('d-m-Y'),
        );

        $this->db->insert('user', $data);
    }

    public function getProdukByKategori($kategori) {
        if ($kategori == "Fashion%20Pria") {
            return $this->db->get_where('daftar_produk', ['category' => "Fashion Pria"] )->result_array();
        } 
        elseif ($kategori == "Fashion%20Wanita") {
            return $this->db->get_where('daftar_produk', ['category' => "Fashion Wanita"] )->result_array();
        }
        elseif ($kategori == "Furniture%20dan%20Dekorasi%20Rumah") {
            return $this->db->get_where('daftar_produk', ['category' => "Furniture dan Dekorasi Rumah"] )->result_array();
        }
        elseif ($kategori == "Sport%20dan%20Stationary") {
            return $this->db->get_where('daftar_produk', ['category' => "Sport dan Stationary"] )->result_array();
        }
        else {
            return $this->db->get_where('daftar_produk', ['category' => $kategori] )->result_array();
        }
        
    }
}

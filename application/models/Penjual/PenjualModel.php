<?php

class PenjualModel extends CI_Model
{

    public function login($user, $pass)
    {
        $data = [
            'email' => $user,
            'password'  => $pass
        ];
        $check_user = $this->db->get_where('penjual', $data);
        return $check_user->num_rows() > 0;
    }

    public function cekVerifikasiPenjual($user, $pass)
    {
        $data = [
            'email' => $user,
            'password'  => $pass
        ];
        $check_user = $this->db->get_where('penjual', $data);
        return $check_user->result_array()[0]['verifikasi'];
    }

    public function insertProduk($idP)
    {
        $name = $this->input->post('name');
        $category = $this->input->post('category');
        $minOrder = $this->input->post('min_order');
        $price = $this->input->post('price');
        $color = $this->input->post('color');
        $size = $this->input->post('size');
        $weight = $this->input->post('weight');
        $unit = $this->input->post('unit_weight');
        $stock = $this->input->post('stock');
        $condition = $this->input->post('condition');
        $description = $this->input->post('description');
        $image = $this->_uploadImage();

        $data = [
            'name' => $name,
            'category' => $category,
            'min_order' => $minOrder,
            'price' => $price,
            'color' => $color,
            'size'      => $size,
            'weight'      => $weight,
            'unit_weight' => $unit,
            'stock'      => $stock,
            'condition'      => $condition,
            'description'      => $description,
            'image' => $image,
            'date_upload' => time(),
            'id_user' => $idP
        ];

        $this->db->insert('daftar_produk', $data);

        return $this->db->affected_rows();
    }

    private function _uploadImage()
    {
        $config['upload_path'] = './uploadImg';
        $config['allowed_types'] = 'png|jpg|jpeg';
        $config['min_width']            = 600;
        $config['min_height']           = 400;
        $this->load->library('upload', $config);
        $gmb = $this->upload->do_upload('image') . $this->upload->data('file_name');
        return substr($gmb, 1);
    }

    public function getIdPenjual()
    {
        $data = [
            'email' => $this->session->userdata('email'),
            'role_id' => $this->session->userdata('role_id')
        ];
        $getPenjual = $this->db->get_where('user', $data);
        $getId = $getPenjual->row('id');
        if ($getPenjual->num_rows() > 0) {
            return $getId;
        } else {
            return false;
        }
    }

    public function getPenjualBySession()
    {
        $data = [
            'email' => $this->session->userdata('email'),
            'role_id' => $this->session->userdata('role_id')
        ];

        $getPenjual = $this->db->get_where('user', $data);
        if ($getPenjual->num_rows() > 0) {
            return $getPenjual->row_array();
        } else {
            return false;
        }
    }

    public function getAllProduk($id)
    {
        $getAllProduk = $this->db->get_where('daftar_produk', ['id_user' => $id]);
        if ($getAllProduk->num_rows() > 0) {
            return $getAllProduk->result_array();
        } else {
            return false;
        }
    }

    public function deleteProduk($id)
    {
        $produk = $this->db->get_where('daftar_produk', ['id' => $id]);
        if ($produk->num_rows() > 0) {
            $this->db->delete('daftar_produk', ['id' => $id]);
        }
        return $this->db->affected_rows();
    }

    public function getProdukById($id)
    {
        return $this->db->get_where('daftar_produk', ['id' => $id])->row_array();
    }

    public function updateProduk()
    {
        $id = $this->input->post('id');
        $namaProduk = $this->input->post('namaProduk');
        $kategori = $this->input->post('kategori');
        $pesananMin = $this->input->post('pesananMin');
        $harga = $this->input->post('harga');
        if ($this->input->post('warna') == null) {
            $warna = $this->input->post('warna2');
        } else {
            $warna = $this->input->post('warna');
        }
        $ukuran = $this->input->post('ukuran');
        $berat = $this->input->post('berat');
        $satuan = $this->input->post('satuan');
        $stok = $this->input->post('stok');
        $kondisi = $this->input->post('kondisi');
        $deskripsi = $this->input->post('deskripsi');

        $config['upload_path'] = './uploadImg';
        $config['allowed_types'] = 'png|jpg|jpeg';
        $this->load->library('upload', $config);
        $gmb = $this->upload->do_upload('gambar') . $this->upload->data('file_name');
        $gambar = substr($gmb, 1);

        $data = [
            'nama_produk' => $namaProduk,
            'kategori' => $kategori,
            'pesanan_min' => $pesananMin,
            'harga' => $harga,
            'warna' => $warna,
            'ukuran'      => $ukuran,
            'berat'      => $berat,
            'satuan_berat' => $satuan,
            'stok'      => $stok,
            'kondisi'      => $kondisi,
            'deskripsi'      => $deskripsi,
            'gambar' => $gambar
        ];

        $this->db->update('daftar_produk', $data, ['id' => $id]);

        return $this->db->affected_rows();
    }
}

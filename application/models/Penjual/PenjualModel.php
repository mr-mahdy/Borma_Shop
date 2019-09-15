<?php

class PenjualModel extends CI_Model
{

    public function createAkun()
    {
        $namaToko = $this->input->post('namaToko');
        $email = $this->input->post('emailD');
        $pass = $this->input->post('pass');
        $noTelp = $this->input->post('noTelp');
        $pin = $this->input->post('pin');

        $data = array(
            'nama_toko'         => $namaToko,
            'email'             => $email,
            'password'          => $pass,
            'noTelp'            => $noTelp,
            'pin'               => $pin,
            'tanggal_dibuat'    => date('d-m-Y'),
            'bulan'             => date('m'),
            'tahun'             => date('Y')
        );

        $this->db->insert('penjual', $data);
        return $this->db->affected_rows();
    }

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

    public function cekKontak()
    {
        $user = $this->session->userdata('userPenjual');
        $pass = $this->session->userdata('passPenjual');
        $sessionData = [
            'email' => $user,
            'password' => $pass
        ];

        $cekPenjual = $this->db->get_where('penjual', $sessionData);
        if ($cekPenjual->num_rows() > 0) {
            $id = $cekPenjual->row('id');
            $sessionData = [
                'id' => $id,
                'alamat' => ''
            ];
            $cekAlamat = $this->db->get_where('penjual', $sessionData);
            if ($cekAlamat->num_rows() > 0) {
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

    public function getNamaBrandHp()
    {
        $getItem = $this->db->get_where('item', ['nama_item' => 'Handphone']);
        if ($getItem->num_rows() > 0) {
            $id = $getItem->row('id');
            $getBrand = $this->db->get_where('brand', ['id_item' => $id]);
            if ($getBrand->num_rows() > 0) {
                return $getBrand->result();
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

    public function insertKontakPenjual()
    {
        $namaPenjual = $this->input->post('nama_penjual');
        $alamat = $this->input->post('alamat');
        $kotaPenjual = $this->input->post('kota_penjual');
        $user = $this->session->userdata('userPenjual');
        $pass = $this->session->userdata('passPenjual');

        $sessionData = [
            'email' => $user,
            'password' => $pass
        ];

        $cekPenjual = $this->db->get_where('penjual', $sessionData);
        if ($cekPenjual->num_rows() > 0) {
            $id = $cekPenjual->row('id');
            $data = array(
                'nama_penjual'         => $namaPenjual,
                'alamat'             => $alamat,
                'kota_penjual'          => $kotaPenjual
            );
            $updatePenjual = $this->db->where('id', $id)->update('penjual', $data);
            if ($updatePenjual) {
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

    public function insertProduk($idP)
    {
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
            'gambar' => $gambar,
            'tanggal_upload' => time(),
            'id_Penjual' => $idP
        ];

        $this->db->insert('daftar_produk', $data);

        if ($this->db->affected_rows() > 0) {
            return $this->db->insert_id();
        } else {
            return false;
        }
    }

    public function uploadGambar($id)
    {
        $gmb = $this->db->get_where('daftar_produk', ['id' => $id])->result_array();
        return $gmb;
    }

    public function getIdPenjual()
    {
        $data = [
            'email' => $this->session->userdata('userPenjual'),
            'password' => $this->session->userdata('passPenjual')
        ];
        $getPenjual = $this->db->get_where('penjual', $data);
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
            'email' => $this->session->userdata('userPenjual'),
            'password' => $this->session->userdata('passPenjual')
        ];

        $getPenjual = $this->db->get_where('penjual', $data);
        if ($getPenjual->num_rows() > 0) {
            return $getPenjual->row_array();
        } else {
            return false;
        }
    }

    public function getAllProduk($id)
    {
        $getAllProduk = $this->db->get_where('daftar_produk', ['id_penjual' => $id]);
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

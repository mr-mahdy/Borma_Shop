<?php

class PembayaranModel extends CI_Model
{
    public function addInvoice($id)
    {
        $jasaPengiriman = $this->input->post('pengiriman');
        $jenisPembayaran = $this->input->post('pembayaran');
        $time = date('d-m-Y');

        foreach ($this->cart->contents() as $item) {
            $data = [
                'id' => '',
                'id_pembeli' => $id,
                'id_produk' => $item['id'],
                'jumlah' => $item['qty'],
                'jasa_pengiriman' => $jasaPengiriman,
                'jenis_pembayaran' => $jenisPembayaran,
                'status' => 'Belum',
                'created_date' => $time
            ];
            $this->db->insert('invoice', $data);
        }
        return $this->db->affected_rows();
    }

    public function getInvoice($id)
    {
        $query = "SELECT invoice . *, daftar_produk . image, daftar_produk . name, pembeli . alamat, pembeli . telepon, daftar_produk . id_user FROM invoice 
         LEFT JOIN daftar_produk ON daftar_produk . id = invoice . id_produk 
         LEFT JOIN pembeli ON invoice . id_pembeli = pembeli . id WHERE id_user = '$id'";

        return $this->db->query($query)->result_array();
    }

    public function getInvoicePembeli($id)
    {
        $query = "SELECT invoice . *, daftar_produk . image, daftar_produk . name, pembeli . alamat, pembeli . telepon FROM invoice 
         LEFT JOIN daftar_produk ON daftar_produk . id = invoice . id_produk 
         LEFT JOIN pembeli ON invoice . id_pembeli = pembeli . id WHERE id_pembeli = '$id'";

        return $this->db->query($query)->result_array();
    }

    public function getJumlahInvoiceBerhasil($id)
    {
        $query = "SELECT * FROM invoice 
        JOIN daftar_produk ON daftar_produk . id = invoice . id_produk WHERE id_user = '$id'";
        $invoice = $this->db->query($query)->result_array();

        $jml = 0;
        foreach ($invoice as $inv) {
            if ($inv['status'] == 'Kirim') {
                $jml++;
            }
        }
        return $jml;
    }

    public function getTotalIPenjualan($id)
    {
        $query = "SELECT * FROM invoice 
        JOIN daftar_produk ON daftar_produk . id = invoice . id_produk WHERE id_user = '$id'";
        $invoice = $this->db->query($query)->result_array();

        $jml = 0;
        foreach ($invoice as $inv) {
            if ($inv['status'] == 'Kirim') {
                $jml += ($inv['price'] * $inv['jumlah']);
            }
        }
        return $jml;
    }
}

<?php

class Keranjang extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Penjual/PenjualModel', 'pm');
        $this->load->model('Menu/Menu_model', 'mm');
        $this->load->library('form_validation');
    }

    public function index()
    {
        return redirect('Home/index');
    }

    public function addKeranjang($id)
    {
        $produk = $this->pm->getProdukById($id);

        $data = [
            'id' => '',
            'qty' => 1,
            'price' => $produk['price'],
            'name' => $produk['name']
        ];
    }
}

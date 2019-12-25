<?php

class Keranjang extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Pembeli/PembeliModel', 'pm');
        $this->load->model('Menu/Menu_model', 'mm');
        $this->load->model('Pembeli/KeranjangModel', 'km');
        $this->load->library('form_validation');
    }

    public function index()
    {
        if ($this->session->userdata('role_id') == 2) {
            $data['judul'] = "Keranjang | Pembeli";
            $data['menuKategori'] = $this->mm->getMenuKategori();
            $data['pembeli'] = $this->pm->getProfilPembeli($this->session->userdata('email'));
            $this->load->view('Templates/header', $data);
            $this->load->view('Templates/topbar', $data);
            $this->load->view('Home/Keranjang', $data);
            $this->load->view('Templates/footer');
        } else {
            redirect('Home/index');
        }
    }

    public function addKeranjang($id)
    {
        $produk = $this->pm->getProdukById($id);
        $data = [
            'rowid' => '',
            'id' => $produk['id'],
            'qty' => 1,
            'price' => $produk['price'],
            'name' => $produk['name']
        ];
        $this->cart->insert($data);
        redirect('home/index');
    }

    public function removeKeranjang($id)
    {

        $this->cart->remove($id);
        redirect('keranjang/index');
    }
}

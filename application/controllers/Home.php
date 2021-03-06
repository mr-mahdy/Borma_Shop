<?php

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Menu/Menu_model', 'mm');
        $this->load->model('Home/Home_model', 'hm');
        $this->load->model('Pembeli/PembeliModel', 'pm');
        $this->load->model('Pembayaran/PembayaranModel', 'pbm');
        $this->load->model('Menu/Menu_model', 'mm');
        $this->load->library('form_validation');
    }

    public function index()
    {
        if ($this->session->userdata('role_id') == 2) {
            $data['judul'] = "Home | Borma Shop";
            $data['pembeli'] = $this->pm->getPembeliBySession();
            $data['menuKategori'] = $this->mm->getMenuKategori();
            $data['produkBaru'] = $this->hm->getAllProdukByBaru();

            $data['invoice'] = $this->pbm->getInvoicePembeli($this->pm->getIdPembeli($this->session->userdata('email')));
            $this->load->view('Templates/header', $data);
            $this->load->view('Templates/topbar', $data);
            $this->load->view('Home/index', $data);
            $this->load->view('Templates/footer');
        } else {
            $data['judul'] = "Home | Borma Shop";
            $data['menuKategori'] = $this->mm->getMenuKategori();
            $data['produkBaru'] = $this->hm->getAllProdukByBaru();
            $this->load->view('Templates/header', $data);
            $this->load->view('Templates/topbar', $data);
            $this->load->view('Home/index', $data);
            $this->load->view('Templates/footer');
        }
    }

    public function detailProduk($id)
    {
        $data['judul'] = "Detail Produk | Borma Shop";
        $data['menuKategori'] = $this->mm->getMenuKategori();
        $data['produk'] = $this->hm->getProdukById($id);
        $data['allProduk'] = $this->hm->getAllProduk();
        $idP = $data['produk']['id_user'];
        $data['penjual'] = $this->hm->getPenjualById($idP);
        $data['kategori'] = $this->mm->getMenuKategori();
        $data['pembeli'] = $this->pm->getPembeliBySession();
        $this->load->view('Templates/header', $data);
        $this->load->view('Templates/topbar', $data);
        $this->load->view('Home/DetailProduk', $data);
        $this->load->view('Templates/footer');
    }

    public function gridProduk($kategori)
    {
        $data['judul'] = "Produk | Borma Shop";
        $data['menuKategori'] = $this->mm->getMenuKategori();
        $data['allProduk'] = $this->hm->getAllProduk();
        $data['produkKategori'] = $this->hm->getProdukByKategori($kategori);
        $data['kategori'] = $this->mm->getMenuKategori();
        $data['pembeli'] = $this->pm->getPembeliBySession();
        $this->load->view('Templates/header', $data);
        $this->load->view('Templates/topbar', $data);
        $this->load->view('Home/GridProduk', $data);
        $this->load->view('Templates/footer');
    }

    public function search()
    {
        $data['judul'] = "Produk | Borma Shop";
        $data['kategori'] = $this->mm->getMenuKategori();
        $data['menuKategori'] = $this->mm->getMenuKategori();
        $data['allProduk'] = $this->hm->getAllProduk();
        $data['pembeli'] = $this->pm->getPembeliBySession();
        $data['produkKategori'] = $this->hm->getProdukBySearch();
        $this->load->view('Templates/header', $data);
        $this->load->view('Templates/topbar', $data);
        $this->load->view('Home/GridProduk', $data);
        $this->load->view('Templates/footer');
    }

    public function filter()
    {
        $data['judul'] = "Produk | Borma Shop";
        $data['kategori'] = $this->mm->getMenuKategori();
        $data['menuKategori'] = $this->mm->getMenuKategori();
        $data['allProduk'] = $this->hm->getAllProduk();
        $data['pembeli'] = $this->pm->getPembeliBySession();
        $data['produkKategori'] = $this->hm->getProdukByPrice();
        $this->load->view('Templates/header', $data);
        $this->load->view('Templates/topbar', $data);
        $this->load->view('Home/GridProduk', $data);
        $this->load->view('Templates/footer');
    }
}

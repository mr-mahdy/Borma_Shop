<?php

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Menu/Menu_model', 'mm');
        $this->load->model('Home/Home_model', 'hm');
    }

    public function index()
    {
        $data['judul'] = "Home | Borma Shop";
        $data['menuKategori'] = $this->mm->getMenuKategori();
        $data['subMenuKategori'] = $this->mm->getSubMenuKategori();
        $data['menu'] = $this->mm->getMenuPenjual();
        $data['produkBaru'] = $this->hm->getAllProdukByBaru();
        $this->load->view('Templates/header', $data);
        $this->load->view('Templates/topbar', $data);
        $this->load->view('Home/index', $data);
        $this->load->view('Templates/footer');
    }

    public function menuElektronik()
    {
        $this->load->view('Home/menuProdukElektronik');
    }

    public function detailProduk($id)
    {
        $data['judul'] = "Detail Produk | Borma Shop";
        $data['menuKategori'] = $this->mm->getMenuKategori();
        $data['subMenuKategori'] = $this->mm->getSubMenuKategori();
        $data['menu'] = $this->mm->getMenuPenjual();
        $data['produk'] = $this->hm->getProdukById($id);
        $data['allProduk'] = $this->hm->getAllProduk();

        $idP = $data['produk']['id_penjual'];
        $data['penjual'] = $this->hm->getPenjualById($idP);
        $data['kategori'] = $this->mm->getMenuKategori();
        $this->load->view('Templates/header', $data);
        $this->load->view('Templates/topbar', $data);
        $this->load->view('Home/DetailProduk', $data);
        $this->load->view('Templates/footer');
    }
}

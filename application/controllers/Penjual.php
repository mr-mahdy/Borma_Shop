<?php

class Penjual extends CI_Controller
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
        if ($this->session->userdata('role_id') == 1) {
            $data['judul'] = "Dashboard | Penjual";
            $data['menu'] = $this->mm->getMenuPenjual();
            $data['penjual'] = $this->pm->getPenjualBySession();
            $this->load->view('Templates/header', $data);
            $this->load->view('Templates/topbar', $data);
            $this->load->view('Penjual/index', $data);
            $this->load->view('Templates/footer');
        } else {
            return redirect('Auth/index');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role_id');
        return redirect('Auth/index');
    }

    public function insertProduk()
    {
        if ($this->session->userdata('role_id') == 1) {
            $this->form_validation->set_rules('name', 'Nama Produk', 'required|trim');
            // $this->form_validation->set_rules('image', 'Gambar', 'required');
            $this->form_validation->set_rules('category', 'Kategori', 'required');
            $this->form_validation->set_rules('price', 'Harga', 'required|trim');
            $this->form_validation->set_rules('min_order', 'Pesanan Min', 'required|trim');
            $this->form_validation->set_rules('color', 'Warna', 'required|trim');
            $this->form_validation->set_rules('size', 'Ukuran', 'trim');
            $this->form_validation->set_rules('weight', 'Berat', 'trim');
            $this->form_validation->set_rules('stock', 'Jumlah Stok', 'required|trim');
            $this->form_validation->set_rules('condition', 'Kondisi', 'required|trim');
            $id = $this->pm->getIdPenjual();
            if ($this->form_validation->run() == false) {
                $data['warna'] = ['Putih', 'Hitam', 'Biru', 'Silver'];
                $data['satuan'] = ['Kilogram (kg)', 'gram (g)', 'Hektogram (hg)'];
                $data['judul'] = "Buat Produk | Penjual";
                $data['menuKategori'] = $this->mm->getMenuKategori();
                $this->load->view('Templates/header', $data);
                $this->load->view('Templates/topbar');
                $this->load->view('Penjual/createProduk', $data);
                $this->load->view('Templates/footer');
            } else {
                $result = $this->pm->insertProduk($id);
                if ($result > 0) {
                    $this->session->set_flashdata('pesanInsertProduk', 'Data Produk Berhasil Disimpan');
                    redirect('Penjual/index');
                } else {
                    $this->session->set_flashdata('pesan', 'Data Produk Gagal Disimpan');
                    redirect('Penjual/createProduk');
                }
            }
        } else {
            return redirect('Auth/index');
        }
    }

    public function createProduk()
    {
        if ($this->session->userdata('role_id') == 1) {
            $data['warna'] = ['Putih', 'Hitam', 'Biru', 'Silver'];
            $data['satuan'] = ['Kilogram (kg)', 'gram (g)', 'Hektogram (hg)'];

            $data['judul'] = "Buat Produk | Penjual";
            $data['menuKategori'] = $this->mm->getMenuKategori();
            $this->load->view('Templates/header', $data);
            $this->load->view('Templates/topbar', $data);
            $this->load->view('Penjual/createProduk', $data);
            $this->load->view('Templates/footer');
        } else {
            return redirect('Auth/index');
        }
    }

    public function daftarProduk()
    {
        if ($this->session->userdata('role_id') == 1) {
            $data['judul'] = "Pengelolaan Produk | Penjual";
            $data['menu'] = $this->mm->getMenuPenjual();
            $id = $this->pm->getIdPenjual();
            $data['allProduk'] = $this->pm->getAllProduk($id);
            $this->load->view('Templates/header', $data);
            $this->load->view('Templates/topbar', $data);
            $this->load->view('Penjual/DaftarProduk', $data);
            $this->load->view('Templates/footer');
        } else {
            return redirect('Auth/index');
        }
    }

    public function deleteProduk($id)
    {
        if ($this->session->userdata('userPenjual') == "" &&  $this->session->userdata('passPenjual') == "") {
            return redirect('Penjual/index');
        } else {
            $result = $this->pm->deleteProduk($id);
            if ($result > 0) {
                $this->session->set_flashdata('msg2', 'Produk Telah Dihapus');
            }
            return redirect('Penjual/DaftarProduk');
        }
    }

    public function editProduk($id)
    {
        if ($this->session->userdata('userPenjual') == "" &&  $this->session->userdata('passPenjual') == "") {
            return redirect('Penjual/index');
        } else {
            $data['produk'] = $this->pm->getProdukById($id);
            $data['warna'] = ['Putih', 'Hitam', 'Biru', 'Silver'];
            $data['satuan'] = ['Kilogram (kg)', 'gram (g)', 'Hektogram (hg)'];
            $data['menu'] = $this->mm->getMenuPenjual();
            $data['menuKategori'] = $this->mm->getMenuKategori();
            $data['judul'] = "Edit Produk | Penjual";
            $this->load->view('Templates/header', $data);
            $this->load->view('Templates/topbar', $data);
            $this->load->view('Penjual/EditProduk', $data);
            $this->load->view('Templates/footer');
        }
    }

    public function updateProduk()
    {
        if ($this->session->userdata('userPenjual') == "" &&  $this->session->userdata('passPenjual') == "") {
            return redirect('Penjual/index');
        } else {
            $result = $this->pm->updateProduk();
            if ($result > 0) {
                $this->session->set_flashdata('pesan', 'Data Berhasil Di Update');
            } else {
                $this->session->set_flashdata('pesan2', 'Data Gagal Di Simpan');
            }
            return redirect('Penjual/DaftarProduk');
        }
    }
}

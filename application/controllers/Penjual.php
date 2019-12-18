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
        if ($this->session->userdata('role_id') == 1) {
            $result = $this->pm->deleteProduk($id);
            if ($result > 0) {
                $this->session->set_flashdata('msg', 'Produk Berhasil Dihapus');
            }
            return redirect('Penjual/DaftarProduk');
        } else {
            return redirect('Auth/index');
        }
    }

    public function editProduk($id)
    {
        if ($this->session->userdata('role_id') == 1) {
            $data['produk'] = $this->pm->getProdukById($id);
            $data['warna'] = ['Putih', 'Hitam', 'Biru', 'Silver'];
            $data['satuan'] = ['Kilogram (kg)', 'gram (g)', 'Hektogram (hg)'];

            $data['judul'] = "Edit Produk | Penjual";
            $data['menuKategori'] = $this->mm->getMenuKategori();
            $this->load->view('Templates/header', $data);
            $this->load->view('Templates/topbar', $data);
            $this->load->view('Penjual/EditProduk', $data);
            $this->load->view('Templates/footer');
        } else {
            return redirect('Auth/index');
        }
    }

    public function updateProduk()
    {
        if ($this->session->userdata('role_id') == 1) {
            $this->form_validation->set_rules('name', 'Nama Produk', 'required|trim');
            $this->form_validation->set_rules('category', 'Kategori', 'required');
            $this->form_validation->set_rules('price', 'Harga', 'required|trim');
            $this->form_validation->set_rules('min_order', 'Pesanan Min', 'required|trim');
            $this->form_validation->set_rules('color', 'Warna', 'required|trim');
            $this->form_validation->set_rules('size', 'Ukuran', 'trim');
            $this->form_validation->set_rules('weight', 'Berat', 'trim');
            $this->form_validation->set_rules('stock', 'Jumlah Stok', 'required|trim');
            $this->form_validation->set_rules('condition', 'Kondisi', 'required|trim');

            $id = $this->input->post('id');
            $result = $this->pm->updateProduk($id);
            if ($this->form_validation->run() == false) {
                $this->editProduk($id);
            } else {
                if ($result > 0) {
                    $this->session->set_flashdata('msg', 'Data Berhasil Diubah');
                } else {
                    $this->session->set_flashdata('msg', 'Data Gagal Diubah');
                }
                return redirect('Penjual/DaftarProduk');
            }
        } else {
            return redirect('Auth/index');
        }
    }

    public function editProfil()
    {
        if ($this->session->userdata('role_id') == 1) {
            $data['penjual'] = $this->pm->getPenjualBySession();

            $data['judul'] = "Edit Profil | Penjual";
            $data['menuKategori'] = $this->mm->getMenuKategori();
            $this->load->view('Templates/header', $data);
            $this->load->view('Templates/topbar', $data);
            $this->load->view('Penjual/EditProfil', $data);
            $this->load->view('Templates/footer');
        } else {
            return redirect('Auth/index');
        }
    }

    public function updateProfil()
    {

        if ($this->session->userdata('role_id') == 1) {
            $this->form_validation->set_rules('name', 'Nama', 'required');
            $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
            $this->form_validation->set_rules('password', 'Password', 'required|trim');
            $password = $this->input->post('password');
            if ($this->form_validation->run() == false) {
                redirect('penjual/editProfil');
            } else {
                if ($this->_validationPassword($password)) {
                    $id = $this->pm->getIdPenjual();
                    $this->pm->updateProfil($id);
                    $this->session->set_flashdata('pesanInsertProduk', 'Data Profil Berhasil Diubah');
                    return redirect('Penjual/index');
                } else {
                    $this->session->set_flashdata('pesan', 'Password yang anda masukan salah');
                    $this->editProfil();
                }
            }
        } else {
            return redirect('Auth/index');
        }
    }

    private function _validationPassword($password)
    {
        $user = $this->pm->getPenjualBySession();
        if (password_verify($password, $user['password'])) {
            return $user['role_id'] == 1;
        }
    }
}

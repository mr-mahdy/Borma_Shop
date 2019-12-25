<?php

class Pembayaran extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Pembeli/PembeliModel', 'pm');
        $this->load->model('Menu/Menu_model', 'mm');
        $this->load->model('Pembayaran/PembayaranModel', 'pbm');
        $this->load->library('cart');
        $this->load->library('form_validation');
    }

    public function index()
    {
        if ($this->session->userdata('role_id') == 2) {
            $data['judul'] = "Pembayaran | Pembeli";
            $data['menuKategori'] = $this->mm->getMenuKategori();
            $data['pembeli'] = $this->pm->getProfilPembeli($this->session->userdata('email'));
            $this->load->view('Templates/header', $data);
            $this->load->view('Templates/topbar', $data);
            $this->load->view('Pembeli/Pembayaran', $data);
            $this->load->view('Templates/footer');
        } else {
            redirect('Home/index');
        }
    }

    public function addInvoice()
    {
        if ($this->session->userdata('role_id') == 2) {
            $this->form_validation->set_rules('name', 'Nama Lengkap', 'required|trim');
            $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
            $this->form_validation->set_rules('alamat', 'Alamat', 'required|trim');
            $this->form_validation->set_rules('telp', 'Telepon', 'required|trim');
            $this->form_validation->set_rules('pengiriman', 'Jasa Pengiriman', 'required|trim');
            $this->form_validation->set_rules('pembayaran', 'Jenis Pembayaran', 'required|trim');
            $id = $this->pm->getIdPembeli($this->session->userdata('email'));
            $result = $this->pbm->addInvoice($id);
            if ($this->form_validation->run() == false) {
                redirect('Pembayaran/index');
            } else {
                if ($result > 0) {
                    $this->session->set_flashdata('msg', 'Pembayaran produk berhasil');
                    $this->cart->destroy();
                } else {
                    $this->session->set_flashdata('msg1', 'Pembayaran produk gagal');
                }
                return redirect('Pembayaran/index');
            }
        } else {
            return redirect('Auth/index');
        }
    }

    public function removeKeranjang($id)
    {
        if ($this->session->userdata('role_id') == 2) {
            $this->cart->remove($id);
            redirect('keranjang/index');
        } else {
            redirect('Auth/index');
        }
    }
}

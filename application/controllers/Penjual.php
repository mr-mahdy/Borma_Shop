<?php

class Penjual extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Penjual/PenjualModel', 'pm');
        $this->load->model('Menu/Menu_model', 'mm');
    }

    public function index()
    {
        if ($this->session->userdata('userPenjual') == "" &&  $this->session->userdata('passPenjual') == "") {
            $data['judul'] = "Akun Penjual | Penjual";
            $data['menuKategori'] = $this->mm->getMenuKategori();
            $data['subMenuKategori'] = $this->mm->getSubMenuKategori();
            $this->load->view('Templates/header', $data);
            $this->load->view('Templates/topbar', $data);
            $this->load->view('Penjual/index');
            $this->load->view('Templates/footer');
        } else {
            return redirect('Penjual/Dashboard');
        }
    }

    public function createAkun()
    {
        $result = $this->pm->createAkun();
        if ($result > 0) {
            $this->session->set_flashdata('pesan', 'Silahkan Ditunggu Proses Verifikasi oleh Admin');
            $data['judul'] = "Akun Penjual | Penjual";
            $data['menuKategori'] = $this->mm->getMenuKategori();
            $data['subMenuKategori'] = $this->mm->getSubMenuKategori();
            $this->load->view('Templates/header', $data);
            $this->load->view('Templates/topbar');
            $this->load->view('Penjual/index');
            $this->load->view('Templates/footer');
        } else {
            return redirect('Penjual/index');
        }
    }

    public function Dashboard()
    {
        if ($this->session->userdata('userPenjual') == "" &&  $this->session->userdata('passPenjual') == "") {
            return redirect('Penjual/index');
        } else {
            $data['judul'] = "Dashboard | Penjual";
            $data['menu'] = $this->mm->getMenuPenjual();
            $data['penjual'] = $this->pm->getPenjualBySession();
            $this->load->view('Templates/header', $data);
            $this->load->view('Templates/topbar', $data);
            $this->load->view('Penjual/Dashboard', $data);
            $this->load->view('Templates/footer');
        }
    }

    public function login()
    {
        $user = $this->input->post('userPenjual');
        $pass = $this->input->post('passPenjual');
        $result = $this->pm->login($user, $pass);
        $verifikasi = $this->pm->cekVerifikasiPenjual($user, $pass);
        if ($result) {
            if ($verifikasi == 'Iya') {
                $sessionData = [
                    'userPenjual' => $user,
                    'passPenjual' => $pass
                ];
                $this->session->set_userdata($sessionData);
                return redirect('Penjual/Dashboard');
            } else {
                $this->session->set_flashdata('msg', 'Akun Penjual Belum Diverifikasi oleh Admin');
                return redirect('Penjual/index');
            }
        } else {
            $this->session->set_flashdata('msg', 'Username dan Password Salah');
            return redirect('Penjual/index');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('userPenjual');
        $this->session->unset_userdata('passPenjual');
        return redirect('Penjual/index');
    }

    public function insertProduk()
    {
        if ($this->session->userdata('userPenjual') == "" &&  $this->session->userdata('passPenjual') == "") {
            return redirect('Penjual/index');
        } else {
            $id = $this->pm->getIdPenjual();
            $result = $this->pm->insertProduk($id);
            if ($result != false) {
                $gmb = $this->pm->uploadGambar($result);

                $this->session->set_flashdata('pesan', 'Data Berhasil Di Simpan');

                $output = '<img src="' . base_url() . 'uploadImg/' . $gmb[0]['gambar'] . '" class="responsive_img" width="100">';
                echo $output;
            } else {
                $this->session->set_flashdata('pesan', 'Data Gagal Di Simpan');
                return redirect('Penjual/CreateProduk');
            }
        }
    }

    public function CreateProduk()
    {
        if ($this->session->userdata('userPenjual') == "" &&  $this->session->userdata('passPenjual') == "") {
            return redirect('Penjual/index');
        } else {
            $result = $this->pm->cekKontak();
            $data['warna'] = ['Putih', 'Hitam', 'Biru', 'Silver'];
            $data['satuan'] = ['Kilogram (kg)', 'gram (g)', 'Hektogram (hg)'];
            $data['menu'] = $this->mm->getMenuPenjual();

            if ($result) {
                $data['judul'] = "Kontak Penjual | Penjual";
                $this->load->view('Templates/header', $data);
                $this->load->view('Templates/topbar', $data);
                $this->load->view('Penjual/KontakPenjual', $data);
            } else {
                $data['judul'] = "Tambah Produk | Penjual";
                $this->load->view('Templates/header', $data);
                $this->load->view('Templates/topbar', $data);
                $data['menuKategori'] = $this->mm->getMenuKategori();
                $this->load->view('Penjual/CreateProduk', $data);
            }
            $this->load->view('Templates/footer');
        }
    }

    public function getNamaBrandHp()
    {
        if ($this->session->userdata('userPenjual') == "" &&  $this->session->userdata('passPenjual') == "") {
            return redirect('Penjual/index');
        } else {
            $output = '';
            $result = $this->pm->getNamaBrandHp();
            if ($result) {
                if (count($result)) {
                    $output .= '<select name="brand_hp" id="brand_hp">';
                    foreach ($result as $brand) {
                        $output .= '<option value="';
                        $output .= $brand->id;
                        $output .= '">';
                        $output .= $brand->nama_brand;
                        $output .= '</option>';
                    }
                    $output .= '</select>';
                } else {
                    $output .= '<select disabled></select>';
                }
            }
            echo $output;
        }
    }

    public function insertKontakPenjual()
    {
        if ($this->session->userdata('userPenjual') == "" &&  $this->session->userdata('passPenjual') == "") {
            return redirect('Penjual/index');
        } else {
            $result = $this->pm->insertKontakPenjual();
            if ($result) {
                return redirect('Penjual/Dashboard');
            } else {
                $this->load->view('Penjual/KontakPenjual');
            }
        }
    }

    public function DaftarProduk()
    {
        if ($this->session->userdata('userPenjual') == "" &&  $this->session->userdata('passPenjual') == "") {
            return redirect('Penjual/index');
        } else {
            $data['judul'] = "Pengelolaan Produk | Penjual";
            $data['menu'] = $this->mm->getMenuPenjual();
            $id = $this->pm->getIdPenjual();
            $data['allProduk'] = $this->pm->getAllProduk($id);
            $this->load->view('Templates/header', $data);
            $this->load->view('Templates/topbar', $data);
            $this->load->view('Penjual/DaftarProduk', $data);
            $this->load->view('Templates/footer');
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

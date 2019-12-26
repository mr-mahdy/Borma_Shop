<?php

class Pembeli extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Pembeli/PembeliModel', 'pm');
        $this->load->model('Menu/Menu_model', 'mm');
        $this->load->library('form_validation');
    }

    public function logout()
    {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role_id');
        $this->cart->destroy();
        // remove cookie
        setcookie("email", "", time() - 3600);
        setcookie("role_id", "", time() - 3600);
        return redirect('Auth/index');
    }
    public function editProfil()
    {
        if ($this->session->userdata('role_id') == 2) {

            $data['judul'] = "Profil | Pembeli";
            $data['menuKategori'] = $this->mm->getMenuKategori();
            $data['pembeli'] = $this->pm->getProfilPembeli($this->session->userdata('email'));
            $this->load->view('Templates/header', $data);
            $this->load->view('Templates/topbar', $data);
            $this->load->view('Pembeli/index', $data);
            $this->load->view('Templates/footer');
        } else {
            return redirect('Auth/index');
        }
    }

    public function updateProfil()
    {

        if ($this->session->userdata('role_id') == 2) {
            $this->form_validation->set_rules('name', 'Nama', 'required');
            $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
            $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required');
            $this->form_validation->set_rules('tgl_lhr', 'Tanggal Lahir', 'required');
            $this->form_validation->set_rules('telepon', 'No Telepon', 'required');
            $this->form_validation->set_rules('alamat', 'Alamat', 'required');
            $this->form_validation->set_rules('password', 'Password', 'required|trim');
            $password = $this->input->post('password');
            if ($this->form_validation->run() == false) {
                $this->editProfil();
            } else {
                if ($this->_validationPassword($password)) {
                    $id = $this->pm->getIdPembeli($this->session->userdata('email'));
                    $this->pm->updateProfil($id);
                    $this->session->set_flashdata('pesan', 'Data Profil Berhasil Diubah');
                    return redirect('Pembeli/editProfil');
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
        $user = $this->pm->getPembeliBySession();
        if (password_verify($password, $user['password'])) {
            return $user['role_id'] == 2;
        }
    }
}

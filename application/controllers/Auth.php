<?php

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Home/Home_model', 'hm');
        $this->load->model('Menu/Menu_model', 'mm');
        $this->load->library('form_validation');
    }

    public function index()
    {
        if ($this->session->userdata('email') == null) {
            $this->form_validation->set_rules('emaillogin', 'Email', 'trim|required|valid_email');
            $this->form_validation->set_rules('passwordlogin', 'Password', 'trim|required');
            if ($this->form_validation->run() == false) {
                $data['judul'] = "Login dan Registrasi";
                $data['menuKategori'] = $this->mm->getMenuKategori();
                $this->load->view('Templates/header', $data);
                $this->load->view('Templates/topbar', $data);
                $this->load->view('Home/registration');
                $this->load->view('Templates/footer');
            } else {
                $this->_login();
            }
        } else {
            redirect('Penjual/index');
        }
    }

    private function _login()
    {
        $email = $this->input->post('emaillogin');
        $password = $this->input->post('passwordlogin');

        $user = $this->db->get_where('user', ['email' => $email])->row_array();

        if ($user) {
            if ($user['is_active'] == 1) {
                if (password_verify($password, $user['password'])) {
                    $data = [
                        'email' => $user['email'],
                        'role_id' => $user['role_id']
                    ];
                    if ($data['role_id'] == 1) {
                        $this->session->set_userdata($data);
                        redirect('Penjual/index');
                    } else {
                        $this->session->set_userdata($data);
                        redirect('Pembeli/index');
                    }
                } else {
                    $this->session->set_flashdata('pesanlogin', 'Password salah');
                    redirect('auth');
                }
            } else {
                $this->session->set_flashdata('pesanlogin', 'Email belum diaktifkan');
                redirect('auth');
            }
        } else {
            $this->session->set_flashdata('pesanlogin', 'Email belum terregistrasi');
            redirect('auth');
        }
    }

    public function registration()
    {
        $this->form_validation->set_rules('name', 'Nama', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]');
        $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[6]|matches[password2]');
        $this->form_validation->set_rules('password2', 'Re-Password', 'required|trim|min_length[6]|matches[password]');
        if ($this->form_validation->run() == false) {
            $data['judul'] = "Akun Penjual | Penjual";
            $data['menuKategori'] = $this->mm->getMenuKategori();
            $this->load->view('Templates/header', $data);
            $this->load->view('Templates/topbar');
            $this->load->view('Home/registration');
            $this->load->view('Templates/footer');
        } else {
            $this->session->set_flashdata('pesan', 'Silahkan Verifikasi Email');
            $this->hm->registration();
            redirect('Auth');
        }
    }
}

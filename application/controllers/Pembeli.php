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

    public function index()
    {
        return redirect('Auth/index');
    }

    public function logout()
    {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role_id');
        return redirect('Auth/index');
    }
}

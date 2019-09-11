<?php

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Admin/AdminModel', 'am');
    }

    public function index()
    {
        if ($this->session->userdata('useradmin') == "" &&  $this->session->userdata('passadmin') == "") {
            $data['judul'] = "Akun Admin | Admin";
            $this->load->view('Templates/header', $data);
            $this->load->view('Admin/index');
        } else {
            return redirect('Admin/Dashboard');
        }
    }

    public function login()
    {
        $user = $this->input->post('useradmin');
        $pass = $this->input->post('passadmin');
        $result = $this->am->login($user, $pass);
        if ($result) {
            $sessionData = [
                'useradmin' => $user,
                'passadmin' => $pass
            ];
            $this->session->set_userdata($sessionData);
            return redirect('Admin/Dashboard');
        } else {
            $this->session->set_flashdata('msg', 'Username dan Password Salah');
            return redirect('Admin/index');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('useradmin');
        $this->session->unset_userdata('passadmin');
        return redirect('Admin/index');
    }

    public function Dashboard()
    {
        if ($this->session->userdata('useradmin') == "" &&  $this->session->userdata('passadmin') == "") {
            return redirect('Admin/index');
        } else {
            $data['judul'] = "Admin Panel | Admin";
            $this->load->view('Templates/header', $data);
            $this->load->view('Templates/topbar');
            $this->load->view('Admin/Dashboard');
            $this->load->view('Templates/footer');
        }
    }

    public function insertNamaProduk()
    {
        if ($this->session->userdata('useradmin') == "" &&  $this->session->userdata('passadmin') == "") {
            return redirect('Admin/index');
        } else {
            $result = $this->am->insertNamaProduk();
            if ($result > 0) {
                echo json_encode($result);
            }
        }
    }

    public function getAllProduk()
    {
        if ($this->session->userdata('useradmin') == "" &&  $this->session->userdata('passadmin') == "") {
            return redirect('Admin/index');
        } else {
            $output = '';
            $result = $this->am->getAllProduk();
            if ($result) {
                $output .= '<select class="form-control">';
                foreach ($result as $item) {
                    $output .= '<option value="';
                    $output .= $item->id;
                    $output .= '">';
                    $output .= $item->nama_item;
                    $output .= '</option>';
                }
                $output .= '</select>';
            }
            echo $output;
        }
    }

    public function insertNamaBrand()
    {
        if ($this->session->userdata('useradmin') == "" &&  $this->session->userdata('passadmin') == "") {
            return redirect('Admin/index');
        } else {
            $result = $this->am->insertNamaBrand();
            if ($result > 0) {
                echo json_encode($result);
            }
        }
    }

    public function countAllPenjual()
    {
        if ($this->session->userdata('useradmin') == "" &&  $this->session->userdata('passadmin') == "") {
            return redirect('Admin/index');
        } else {
            $output = '';
            $result = $this->am->countAllPenjual();
            $output .= '<h4>';
            $output .= $result;
            $output .= '</h4>';
            echo $output;
        }
    }

    public function countAllProduk()
    {
        if ($this->session->userdata('useradmin') == "" &&  $this->session->userdata('passadmin') == "") {
            return redirect('Admin/index');
        } else {
            $output = '';
            $result = $this->am->countAllProduk();
            $output .= '<h4>';
            $output .= $result;
            $output .= '</h4>';
            echo $output;
        }
    }

    public function penjual()
    {
        if ($this->session->userdata('useradmin') == "" &&  $this->session->userdata('passadmin') == "") {
            $this->load->view('Admin/index');
        } else {
            $result['allPenjual'] = $this->am->getAllPenjual();
            $data['judul'] = "Admin Panel | Admin";
            $this->load->view('Templates/header', $data);
            $this->load->view('Templates/topbar');
            $this->load->view('Admin/Penjual', $result);
            $this->load->view('Templates/footer');
        }
    }

    public function verifikasiPenjual($id)
    {
        if ($this->session->userdata('useradmin') == "" &&  $this->session->userdata('passadmin') == "") {
            return redirect('Admin/index');
        } else {
            $result = $this->am->verifikasiPenjual($id);
            if ($result > 0) {
                $this->session->set_flashdata('msg', 'Penjual Telah Diverifikasi');
            }
            return redirect('Admin/penjual');
        }
    }

    public function deletePenjual($id)
    {
        if ($this->session->userdata('useradmin') == "" &&  $this->session->userdata('passadmin') == "") {
            return redirect('Admin/index');
        } else {
            $result = $this->am->deletePenjual($id);
            if ($result > 0) {
                $this->session->set_flashdata('msg2', 'Penjual Telah Dihapus');
            }
            return redirect('Admin/penjual');
        }
    }
}

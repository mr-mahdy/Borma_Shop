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
        } else if ($this->session->userdata('role_id') == 1) {
            redirect('Penjual/index');
        } else if ($this->session->userdata('role_id') == 2) {
            redirect('Home/index');
        }
    }

    private function _login()
    {
        $email = $this->input->post('emaillogin');
        $password = $this->input->post('passwordlogin');
        $rememberme = $this->input->post('rememberme');

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
                        if($remember !=NULL) {
                            setcookie('email', $email, time()+60*60*7);
                            setcookie('role_id', $role_id, time()+60*60*7);

                        redirect('Penjual/index');
                    } else if ($data['role_id'] == 2) {
                        $this->session->set_userdata($data);
                        $this->cart->destroy();
                        redirect('Home/index');
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

        }


    private function _sendEmail($token, $type)
    {
        $config = [
            'protocol' => 'smtp',
            'smtp_host' => 'ssl://smtp.googlemail.com',
            'smtp_user' => 'rekwebt@gmail.com',
            'smtp_pass' => 'rekayasaweb',
            'smtp_port' => 465,
            'mailtype' => 'html',
            'charset'  => 'utf-8',
            'newline' => "\r\n"
        ];

        $this->email->initialize($config);

        $this->email->from('rekwebt@gmail.com', 'Tugas Rekweb');
        $this->email->to($this->input->post('email'));

        if ($type == 'verify') {
            $this->email->subject('Account Verification');
            $this->email->message('click this link to verify you account : <a href="' . base_url() . 'Auth/verify?email=' . $this->input->post('email') . '& token=' . urlencode($token) . '">Activate</a>');
        } else if ($type == 'forgot') {
            $this->email->subject('Reset Password');
            $this->email->message('click this link to reset you password : <a href="' . base_url() . 'Auth/resetpassword?email=' . $this->input->post('email') . '& token=' . urlencode($token) . '">Reset Password</a>');
        }


        if ($this->email->send()) {
            return true;
        } else {
            echo $this->email->print_debugger();
            die;
        }
    }

    public function registration1()
    {
        $this->form_validation->set_rules('name', 'Nama', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]');
        $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[6]|matches[password2]');
        $this->form_validation->set_rules('password2', 'Re-Password', 'required|trim|min_length[6]|matches[password]');
        if ($this->form_validation->run() == false) {
            $data['judul'] = "Akun Penjual | Penjual";
            $data['menuKategori'] = $this->mm->getMenuKategori();
            $user = $this->db->get_where('user', ['role_id' => 1])->row_array();
            $this->load->view('Templates/header', $data);
            $this->load->view('Templates/topbar');
            $this->load->view('Home/registration');
            $this->load->view('Templates/footer');
        } else {
            $this->session->set_flashdata('pesan', 'Silahkan Verifikasi Email');
            $this->hm->registration();
            redirect('Auth');
        }

        // $this->_sendEmail($token, 'verify');
    }

    public function registration2()
    {
        $this->form_validation->set_rules('name', 'Nama', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]');
        $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[8]|matches[password2]');
        $this->form_validation->set_rules('password2', 'Re-Password', 'required|trim|min_length[8]|matches[password]');
        if ($this->form_validation->run() == false) {
            $data['judul'] = "Akun Pembeli | Pembeli";
            $data['menuKategori'] = $this->mm->getMenuKategori();
            $this->load->view('Templates/header', $data);
            $this->load->view('Templates/topbar');
            $this->load->view('Home/registration');
            $this->load->view('Templates/footer');
        } else {
            $this->session->set_flashdata('pesan2', 'Silahkan Verifikasi Email');
            $this->hm->registration2();
            redirect('Auth');
        }
        // $this->_sendEmail($token, 'verify');
    }

    public function forgotPassword()
    {
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        if ($this->form_validation->run() == false) {
            $data['title'] = 'Forgot Password';
            $this->load->view('templates/header', $data);
            $this->load->view('Home/forgot-password');
            $this->load->view('templates/footer');
        } else {
            $email = $this->input->post('email');
            $this->db->get_where('user', ['email' => $email])->row_array();
            if ($email) {
                $token = base64_encode(random_bytes(32));
                $user_token = [
                    'email' => $email,
                    'token' => $token,
                    'date_created' => time()
                ];

                $this->db->insert('user_token', $user_token);
                $this->_sendEmail($token, 'forgot');

                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Please Check to email your reset password</div>');
                redirect('Auth/forgotpassword');
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email is not registered or activated</div>');
                redirect('Auth/forgotpassword');
            }
        }
    }

    public function resetPassword()
    {
        $email = $this->input->get('email');
        $token = $this->input->get('token');

        $user = $this->db->get_where('user', ['email' => $email])->row_array();
        if ($user) {
            $user_token = $this->db->get_where('user_token', ['token' => $token])->row_array();
            if ($user_token) {
                $this->session->set_userdata('reset_email', $email);
                $this->changePassword();
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Reset Password Failed ! wrong token</div>');
                redirect('auth');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Reset Password Failed ! wrong email</div>');
            redirect('auth');
        }
    }

    public function changePassword()
    {
        $this->form_validation->set_rules('password1', 'Password', 'trim|required|min_length[3]|matches[password2]');
        $this->form_validation->set_rules('password2', 'Repeat Password', 'trim|required|min_length[3]|matches[password1]');
        if ($this->form_validation->run() == false) {
            $data['title'] = 'Change Password';
            $this->load->view('templates/header', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('Home/change-password');
            $this->load->view('templates/footer');
        } else {
            $password = password_hash($this->input->post('password1'), PASSWORD_DEFAULT);
            $email = $this->session->userdata('reset_email');

            $this->db->set('password', $password);
            $this->db->where('email', $email);
            $this->db->update('user');

            $this->session->unset_userdata('rest_email');
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Password has been change ! please login</div>');
            redirect('auth');
        }
    }
}

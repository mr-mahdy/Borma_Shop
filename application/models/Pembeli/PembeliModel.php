<?php

class PembeliModel extends CI_Model
{

    public function login($user, $pass)
    {
        $data = [
            'email' => $user,
            'password'  => $pass
        ];
        $check_user = $this->db->get_where('pembeli', $data);
        return $check_user->num_rows() > 0;
    }

    public function cekVerifikasiPembeli($user, $pass)
    {
        $data = [
            'email' => $user,
            'password'  => $pass
        ];
        $check_user = $this->db->get_where('pembeli', $data);
        return $check_user->result_array()[0]['verifikasi'];
    }
    public function updateProfil($id)
    {
        $name = $this->input->post('name');
        $email = $this->input->post('email');
        $jk = $this->input->post('jenis_kelamin');
        $tgl_lhr = $this->input->post('tgl_lhr');
        $telepon = $this->input->post('telepon');
        $alamat = $this->input->post('alamat');

        $query = "UPDATE user, pembeli SET name = '$name', email = '$email', jenis_kelamin = '$jk', tgl_lhr = '$tgl_lhr', telepon = '$telepon', alamat = '$alamat'  WHERE pembeli . id = user . id_pembeli AND user . id = $id";
        $this->db->query($query);
    }

    public function getProfilPembeli($email)
    {
        $query = "SELECT * FROM user 
         JOIN pembeli ON pembeli . id = user . id_pembeli WHERE email = '$email'";

        return $this->db->query($query)->row_array();
    }

    public function getIdPembeli($email)
    {
        $query = "SELECT id FROM user 
          WHERE email = '$email'";

        return $this->db->query($query)->row_array()['id'];
    }


    public function getPembeliBySession()
    {
        $data = [
            'email' => $this->session->userdata('email'),
            'role_id' => $this->session->userdata('role_id')
        ];

        $getPembeli = $this->db->get_where('user', $data);
        if ($getPembeli->num_rows() > 0) {
            return $getPembeli->row_array();
        } else {
            return false;
        }
    }
}

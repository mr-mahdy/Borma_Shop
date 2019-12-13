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
}

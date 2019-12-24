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

        $data = [
            'name'  => $name,
             'email' => $email];


        $this->db->update('user', $data, ['id' => $id]);
    }

    public function getIdPembeli()
    {


        $query = "SELECT pembeli . id, pembeli . jenis_kelamin, pembeli . tgl_lhr, 
         pembeli . telepon,  pembeli . alamat, user . user FROM pembeli 
         JOIN user ON pembeli . id_pembeli = user . id ";
        
        return $this->db->query($query)->result_array();


        // $data = [
        //     'email' => $this->session->userdata('email'),
        //     'role_id' => $this->session->userdata('role_id')
        // ];
        // $this->db->select('user.*, pembeli.*');
        // $this->db->from('user');
        // $this->db->get_where('user', $data);
        // $this->db->join('pembeli', 'user.id_pembeli = pembeli.id');
        // $query = $this->db->get();
        // return $query->result_array();
        
        // $getId = $getPembeli->row('id');
        // if ($getPembeli->num_rows() > 0) {
        //     return $getId;
        // } else {
        //     return false;
        // }
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


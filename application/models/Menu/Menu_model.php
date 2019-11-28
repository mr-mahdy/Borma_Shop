<?php

class Menu_model extends CI_Model
{

    public function getMenuKategori()
    {
        return $this->db->get_where('tipe_item')->result_array();
    }

    public function getMenuPenjual()
    {
        return $this->db->get_where('menu_penjual')->result_array();
    }
}

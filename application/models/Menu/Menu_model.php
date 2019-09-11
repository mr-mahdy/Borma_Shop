<?php

class Menu_model extends CI_Model
{
    public function getSubMenuKategori()
    {
        $query = "SELECT item . nama_item, tipe_item . tipe_item, tipe_item . id FROM item JOIN tipe_item ON item . id_tipe_item = tipe_item . id ";

        return $this->db->query($query)->result_array();
    }

    public function getMenuKategori()
    {
        return $this->db->get_where('tipe_item')->result_array();
    }

    public function getMenuPenjual()
    {
        return $this->db->get_where('menu_penjual')->result_array();
    }
}

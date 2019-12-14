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

    public function get_keyword($keyword){
    	$this->db->select('*');
    	$this->db->from('dbs_borma');
    	$this->db->like('name', $keyword);
    	return $this->db->get()->result();
    }
}

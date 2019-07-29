<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mod_Blog extends CI_Model
{

    public function getAll()
    {
        $this->db->select('*');
        $this->db->from('tbl_blog');
        $query = $this->db->get()->result_array();
        return $query;
    }
}

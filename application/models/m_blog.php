<?php
defined('BASEPATH') or exit('No direct script access allowed');

class m_blog extends CI_Model
{
    public function blog($limit, $start)
    {
        $query = $this->db->get('tbl_blog', $limit, $start);
        return $query;
    }
}

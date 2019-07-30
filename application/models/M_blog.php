<?php
defined('BASEPATH') or exit('No direct script access allowed');

class m_blog extends CI_Model
{
    public function blog($limit, $start)
    {
        $query = $this->db->get('tbl_blog', $limit, $start);
        return $query;
    }

    public function get_blog($kode)
    {
        $hsl = $this->db->query("SELECT * FROM tbl_blog where id_blog='$kode'");
        return $hsl;
    }
    function blog_perpage($offset, $limit)
    {
        $hsl = $this->db->query("SELECT * FROM tbl_blog ORDER BY id_blog DESC limit $offset,$limit");
        return $hsl;
    }

    function berita()
    {
        $hsl = $this->db->query("SELECT * FROM tbl_blog ORDER BY id_blog DESC");
        return $hsl;
    }
}

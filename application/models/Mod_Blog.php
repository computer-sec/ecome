<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mod_Blog extends CI_Model
{

	public function getAll()
	{
		$this->db->select('*');
		$this->db->from('tbl_blog');
		$query = $this->db->get();
		return $query;
	}

	public function addBlog($data)
	{
		$this->db->insert('tbl_blog', $data);
	}

	public function getByID()
	{ 

	}

	public function delete($id_blog, $data)
	{
		$this->db->where('id_blog', $id_blog);
		$this->db->delete('tbl_blog', $data);
	}

	public function update($id_blog, $data)
	{
		$this->db->where('id_blog', $id_blog);
		$this->db->update('tbl_blog', $data);
	}
}

<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mod_Product extends CI_Model
{

	public function getAll()
	{
		$hsl = $this->db->query("SELECT image FROM tbl_product");
		return $hsl;
	}

	public function addProduct($data)
	{
		$this->db->insert('tbl_product', $data);
	}

	public function getByID()
	{ }

	public function delete($id_product, $data)
	{
		$this->db->where('id_product', $id_product);
		$this->db->delete('tbl_product', $data);
	}

	public function update($id_product, $data)
	{
		$this->db->where('id_product', $id_product);
		$this->db->update('tbl_product', $data);
	}
}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mod_Product extends CI_Model {

	public function getAll(){
		$this->db->select('*');
		$this->db->from('tbl_product');
		$this->db->join('tbl_category','tbl_product.id_category = tbl_category.id_category','left');
		$query = $this->db->get();
		return $query;
		// $query = $this->db->get('products');
		// return $query;
	}

	public function addProduct($data){
		$this->db->insert('tbl_product',$data);
	}

	public function getByID(){

	}

	public function delete($id_product,$data){
		$this->db->where('id_product',$id_product);
		$this->db->delete('tbl_product',$data);
	}

	public function update($id_product,$data){
		$this->db->where('id_product',$id_product);
		$this->db->update('tbl_product',$data);
	}

}

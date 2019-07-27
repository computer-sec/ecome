<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mod_category extends CI_Model {


	public function getAll(){
		$query = $this->db->get('tbl_category');
		return $query;
	}

	public function addData($data){
		$this->db->insert('tbl_category',$data);
	}

	public function getByID(){

	}

	public function delete($id_category,$data){
		$this->db->where('id_category',$id_category);
		$this->db->delete('tbl_category',$data);
	}

	public function update($id_category, $data){
		$this->db->where('id_category',$id_category);
		$this->db->update('tbl_category',$data);

	}

}

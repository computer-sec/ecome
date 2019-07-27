<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mod_company extends CI_Model {


	public function getAll(){
		$query = $this->db->get('company');
		return $query;
	}

	public function addData($data){
		$this->db->insert('company',$data);
	}

	public function update($id_category, $data){
		$this->db->where('id_category',$id_category);
		$this->db->update('company',$data);

	}

}

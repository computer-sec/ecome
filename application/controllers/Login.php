<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Mod_login');
	}

	public function index()
	{
		$this->load->view('login/login');
	}

	public function cekLogin(){
		$user = $this->input->post('username', TRUE);
		$pass = $this->input->post('password', TRUE);;
		$where = array(
				'username' => $user,
				'password' => md5($pass)
			);

		$check = $this->Mod_login->check("user",$where)->num_rows();
		if ($check > 0) {
			$dt = $this->db->where(array('username' => $user))->get("user")->row();
			$datasession = array('nama' => $user,
								 'status' => "login",
								 'id' => $dt->id_user,
								 'username' => $dt->username
								);
			$this->session->set_userdata($datasession);

			if ($this->session->userdata('status') == "login") {
				redirect(base_url("dashboard"));
				exit;
			}

	}else{
		$this->session->set_flashdata("info","<div class='alert alert-danger alert-dismissible fade show' role='alert'>Username atau password tidak cocok </div>");
		redirect(base_url('Login'));
		exit;
	}

	}
}

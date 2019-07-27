<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->model('Mod_Product');
		$data['title'] = "home";
		$data['produk'] = $this->Mod_Product->getAll();
		$data['active'] = "";
		$this->load->view('templates/header', $data);
		$this->load->view('templates/konten', $data);
		$this->load->view('templates/footer');
	}

	public function about()
	{
		$data['title'] = "";
		$data['active'] = "";
		$this->load->view('templates/header');
		$this->load->view('templates/about');
		$this->load->view('templates/footer');
	}

	public function blog()
	{
		$data['title'] = 'Blog';
		$data['active'] = "";
		$this->load->view('templates/header', $data);
		$this->load->view('templates/blog');
		$this->load->view('templates/footer');
	}

	public function post()
	{
		$data['title'] = 'Post';
		$data['active'] = "";
		$this->load->view('templates/header', $data);
		$this->load->view('templates/post');
		$this->load->view('templates/footer');
	}

	public function produk()
	{
		$data['title'] = 'Produk';
		$data['active'] = "";
		$this->load->view('templates/header', $data);
		$this->load->view('templates/produk');
		$this->load->view('templates/footer');
	}
}

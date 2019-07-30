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

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Mod_Product');
		$this->load->model('m_blog');
	}

	public function index()
	{
		$data['produk'] = $this->Mod_Product->getAll();
		$data['blog'] = $this->m_blog->berita();
		$data['title'] = "Home";
		$data['active'] = "";
		$this->load->view('templates/header', $data);
		$this->load->view('templates/konten', $data);
		$this->load->view('templates/footer');
	}

	public function blog()
	{
		$data['title'] = "Blog";
		$data['active'] = "";
		$this->load->view('templates/header', $data);
		$this->load->view('templates/blog');
		$this->load->view('templates/footer');
	}

	public function post()
	{
		$data['title'] = "Blog";
		$data['active'] = "";
		$this->load->view('templates/header', $data);
		$this->load->view('templates/post');
		$this->load->view('templates/footer');
	}

	public function tentang()
	{
		$data['title'] = "Tentang";
		$data['active'] = "";
		$this->load->view('templates/header', $data);
		$this->load->view('templates/tentang');
		$this->load->view('templates/footer');
	}
}

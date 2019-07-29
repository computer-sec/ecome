<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Blog extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Mod_Blog');
    }

    public function index()
    {
        $data['blog'] = $this->Mod_Blog->getAll();
        $data['title'] = "Blog";
        $data['active'] = "";
        $this->load->view('templates/header', $data);
        $this->load->view('templates/blog', $data);
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
}

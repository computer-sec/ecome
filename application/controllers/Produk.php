<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Produk extends CI_Controller
{
    public function index()
    {
        $data['title'] = "Produk";
        $data['active'] = "";
        $this->load->view('templates/header', $data);
        $this->load->view('templates/produk');
        $this->load->view('templates/footer');
    }

    public function item()
    {
        $data['title'] = "Produk";
        $data['active'] = "";
        $this->load->view('templates/header', $data);
        $this->load->view('templates/item_produk');
        $this->load->view('templates/footer');
    }
}

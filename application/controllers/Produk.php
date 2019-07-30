<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Produk extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Mod_Product');
    }

    public function index()
    {

        $data['title'] = "Produk";
        $data['active'] = "";
        $data['produk'] = $this->Mod_Product->getAll();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/produk', $data);
        $this->load->view('templates/footer');
    }

    public function item()
    {
        $data['title'] = "Produk";
        $data['active'] = "";
        $kode = $this->uri->segment(3);
        $data['barang'] = $this->Mod_Product->get_produk($kode);
        $this->load->view('templates/header', $data);
        $this->load->view('templates/item_produk', $data);
        $this->load->view('templates/footer');
    }
}

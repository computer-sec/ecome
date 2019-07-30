<<<<<<< HEAD
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
=======
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
>>>>>>> 41cd577cb19af67b4c498b4c7ded1d32455a2c50

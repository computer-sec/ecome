<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Blog extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('pagination');
        $this->load->model('m_blog'); // Load Model yang ada di folder models
    }

    public function index()
    {
        //konfigurasi pagination
        $jum = $this->m_blog->berita();
        $page = $this->uri->segment(3);
        if (!$page) :
            $offset = 0;
        else :
            $offset = $page;
        endif;
        $config['base_url'] = site_url('Blog/index'); //site url
        $config['total_rows'] = $jum->num_rows(); //total row
        $limit = $config['per_page'] = 3;  //show record per halaman
        $config["uri_segment"] = 3;  // uri parameter
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = floor($choice);

        // Membuat Style pagination untuk BootStrap v4
        $config['first_link']       = 'First';
        $config['last_link']        = 'Last';
        $config['next_link']        = 'Next';
        $config['prev_link']        = 'Prev';
        $config['full_tag_open']    = '<div class="pagging text-center"><nav  aria-label="..."><ul class="pagination justify-content-center">';
        $config['full_tag_close']   = '</ul></nav></div>';
        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close']  = '</span>Next</li>';
        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['last_tagl_close']  = '</span></li>';

        $this->pagination->initialize($config);
        $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

        //panggil function get_mahasiswa_list yang ada pada mmodel mahasiswa_model. 
        $data['blog'] = $this->m_blog->blog_perpage($offset, $limit);
        $data['pagination'] = $this->pagination->create_links();
        $data['title'] = "Blog";

        //load view mahasiswa view
        $this->load->view('templates/header', $data);
        $this->load->view('templates/blog', $data);
        $this->load->view('templates/footer');
    }

    public function post()
    {
        $kode = $this->uri->segment(3);
        $data['post'] = $this->m_blog->get_blog($kode);
        $data['title'] = "Blog";
        $data['active'] = "";
        $this->load->view('templates/header', $data);
        $this->load->view('templates/post', $data);
        $this->load->view('templates/footer');
    }
}

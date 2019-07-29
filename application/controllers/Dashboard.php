<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->library('upload');
		$this->load->model('Mod_login');
		$this->load->model('Mod_category');
		$this->load->model('Mod_Product');
		if ($this->session->userdata('status') != 'login'){
			redirect('login','refresh');
			exit;
		}
	}


	public function index()
	{

		$data['content'] = "templates/backend/content";
		$this->load->view('templates/backend/index',$data);

	}


	//product
	public function dataProduct(){
		$data['datas'] = $this->Mod_Product->getAll();
		$data['kategori'] = $this->Mod_category->getAll();
		$data['title'] = "Product";
		$data['content'] = "templates/backend/content/product";
		$this->load->view('templates/backend/index',$data);
	}


	public function addProduct(){
		$nmgambar ='';
				$config['upload_path']          = './assets/upload/image/';
                $config['allowed_types']        = 'gif|jpg|png|jpeg';
                $config['max_size']             = 12000;
                // $config['max_width']            = 1024;
                // $config['max_height']           = 768;

                $this->upload->initialize($config);

                if ( ! $this->upload->do_upload('image'))
                {
 					var_dump($this->upload->display_errors()." ".$config['upload_path']);
					exit;
                }
                else
                {
                        $upload_data = array('uploads' => $this->upload->data());
                        $configs['image_library']	= 'gd2';
						$configs['source_image'] 	= './assets/upload/image/'.$upload_data['uploads']['file_name'];
						$configs['new_image'] 		= './assets/upload/thumbs/';
						$configs['create_thumb'] 	= TRUE;
						$configs['quality'] 		= "100%";
						$configs['maintain_ratio'] 	= TRUE;
						$configs['width'] 			= 375; // Pixel
						$configs['height'] 			= 255; // Pixel
						$configs['x_axis'] 			= 0;
						$configs['y_axis'] 			= 0;
						$configs['thumb_marker'] 	= '';
						$this->load->library('image_lib', $configs);
						$this->image_lib->resize();
						$nmgambar = $upload_data['uploads']['file_name'];

                        $data = array('id_product' => $this->input->post('id_product'),
                        			  'name' => $this->input->post('name'),
                        			  'keterangan' => $this->input->post('keterangan'),
                        			  'price' => $this->input->post('price'),
                        			  'image' => $nmgambar,
                        			  'id_category' => $this->input->post('id_category')

                    );
                        $this->Mod_Product->addProduct($data);
                        redirect(base_url('dashboard/dataProduct'));
                        exit;
                }
        }

	public function editProduct($id_product){
				$nmgambar ='';
				$config['upload_path']          = './assets/upload/image/';
                $config['allowed_types']        = 'gif|jpg|png|jpeg';
                $config['max_size']             = 12000;
                // $config['max_width']            = 1024;
                // $config['max_height']           = 768;

                $this->upload->initialize($config);

                if ( ! $this->upload->do_upload('image'))
                {
 					var_dump($this->upload->display_errors()." ".$config['upload_path']);
					exit;
                }
                else
                {
                        $upload_data = array('uploads' => $this->upload->data());
                        $configs['image_library']	= 'gd2';
						$configs['source_image'] 	= './assets/upload/image/'.$upload_data['uploads']['file_name'];
						$configs['new_image'] 		= './assets/upload/thumbs/';
						$configs['create_thumb'] 	= TRUE;
						$configs['quality'] 		= "100%";
						$configs['maintain_ratio'] 	= TRUE;
						$configs['width'] 			= 375; // Pixel
						$configs['height'] 			= 255; // Pixel
						$configs['x_axis'] 			= 0;
						$configs['y_axis'] 			= 0;
						$configs['thumb_marker'] 	= '';
						$this->load->library('image_lib', $configs);
						$this->image_lib->resize();
						$nmgambar = $upload_data['uploads']['file_name'];

                        $data = array('id_product' => $this->input->post('id_product'),
                        			  'name' => $this->input->post('name'),
                        			  'keterangan' => $this->input->post('keterangan'),
                        			  'price' => $this->input->post('price'),
                        			  'stock' => $this->input->post('stock'),
                        			  'image' => $nmgambar,
                        			  'id_category' => $this->input->post('id_category')

                    );
                        $this->Mod_Product->update($id_product,$data);
                        redirect(base_url('dashboard/dataProduct'));
                        exit;
                }
	}  

	public function deleteProduct($id_product){
		$data = array('id_product' => $id_product);
		$this->Mod_Product->delete($id_product,$data);
		$this->session->set_flashdata('delete','Kategori berita telah didelete');
		redirect(base_url('dashboard/dataProduct'));
		exit;
	}      
	


	//category
	public function category(){
		$data['datas'] = $this->Mod_category->getAll();
		$data['title'] = "category";
		$data['content'] = "templates/backend/content/category";
		$this->load->view('templates/backend/index',$data);
	}

	public function addCategory(){
		$data = array('categoryname' => $this->input->post('categoryname', TRUE),
					  'description' => $this->input->post('keterangan', TRUE)
					) ;
		$this->Mod_category->addData($data);
		$this->session->set_flashdata('sukses','Kategori berita telah ditambah');
		redirect(base_url('dashboard/category'));
		exit;

	}

	public function editCategory($id_category){
		$data = array('categoryname' => $this->input->post('categoryname',TRUE),
					  'description'  => $this->input->post('keterangan',TRUE)
	);
		$this->Mod_category->update($id_category,$data);
		$this->session->set_flashdata('edit','Kategori berita telah diupdate');
		redirect(base_url('dashboard/category'));
		exit;
	}

	public function deleteCategory($id_category){
		$data = array('id_category' => $id_category);
		$this->Mod_category->delete($id_category,$data);
		$this->session->set_flashdata('delete','Kategori berita telah didelete');
		redirect(base_url('dashboard/category'));
		exit;
	}



	public function aboutCompany(){
		$this->load->model('Mod_company');
		$data['datas'] = $this->Mod_company->getAll();
		$data['content'] = "templates/backend/content/setting";
		$this->load->view('templates/backend/index',$data);
	}

	public function debug(){

	}

	public function cekBarang(){

	}

	public function Videos(){

	}

	public function gallery(){
		
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect('login');
		exit;
	}



}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Product_model');
	}

	public function index(){
		$data['list'] = $this->Product_model->getAll();
		$this->load->view('partials/header');
		$this->load->view('partials/navbar');
		$this->load->view('partials/sidebar');
		$this->load->view('product/list',$data);
		$this->load->view('partials/footer');
	}

	public function create(){

		$this->form_validation->set_rules('product','product','trim|required');
		$this->form_validation->set_rules('description','description','trim|required');
		$this->form_validation->set_rules('qty','qty','trim|required');
		$this->form_validation->set_rules('price','price','trim|required');
		
		if ($this->form_validation->run() == FALSE) {
			$this->load->model('Category_model');
			$data['data'] = $this->Category_model->getAll();

			$this->load->view('product/create',$data);	
		}else{
				$config['upload_path']	='./assets/uploads/';
				$config['allowed_types'] ='gif|jpg|png';
				$config['max_size'] ='1000000';
				$config['max_width'] ='10240';
				$config['max_height'] ='7680';

				$this->load->library('upload',$config);

				if(! $this->upload->do_upload('foto'))
				{
					$error = array('error' =>$this->upload->display_errors());
					$this->load->view('product/create',$error);
				}else{ 
					$gambar=$this->upload->data();

					$config['image_library']='gd2';
					$config['source_image']='./assets/uploads/'.$gambar['file_name'];
					$config['maintain_ratio']=true;
					$config['create_thumb']=true;
					$config['quality']='80%';
					$config['width']='105';
					$config['haight']='80';


					$this->load->library('image_lib',$config);
					if($this->image_lib->resize()){

					$this->Product_model->insert();
					redirect('product');
				}

			}
		}
	}


	public function edit($id){

		$data['cat'] = $this->Product_model->getById($id);
		
		$this->load->model('Category_model');
		$data['data'] = $this->Category_model->getAll();

		$this->form_validation->set_rules('product','product','trim|required');
		$this->form_validation->set_rules('description','description','trim|required');
		$this->form_validation->set_rules('qty','qty','trim|required');
		$this->form_validation->set_rules('price','price','trim|required');

		if($this->form_validation->run()==FALSE){

			$this->load->view('product/edit',$data);

			}else{
				$config['upload_path']	='./assets/uploads/';
				$config['allowed_types'] ='gif|jpg|png';
				$config['max_size'] ='1000000';
				$config['max_width'] ='10240';
				$config['max_height'] ='7680';

			$this->load->library('upload',$config);

			if(! $this->upload->do_upload('foto'))
				{
					$this->Product_model->edit2($id);
					redirect('product');

				}else{ 

					$gambar=$this->upload->data();

					$config['image_library']='gd2';
					$config['source_image']='./assets/uploads/'.$gambar['file_name'];
					$config['maintain_ratio']=true;
					$config['create_thumb']=true;
					$config['quality']='80%';
					$config['width']='105';
					$config['haight']='80';

					$this->load->library('image_lib',$config);
					if($this->image_lib->resize()){
					$this->Product_model->edit($id);
					redirect('product');
				}
			}
		}
	}

	public function delete($id){
		$this->Product_model->delete($id);
		redirect('product');
	}

}

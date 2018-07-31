<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Category_model');
		
	}

	public function index(){
		$data['list'] = $this->Category_model->getAll();
		$this->load->view('partials/header');
		$this->load->view('partials/navbar');
		$this->load->view('partials/sidebar');
		$this->load->view('category/index',$data);
		$this->load->view('partials/footer');
	}

	public function create(){

		$this->form_validation->set_rules('category','category','trim|required');
		$this->form_validation->set_rules('description','description','trim|required');

		if ($this->form_validation->run() === FALSE) {
			$this->load->view('category/create');
			
		}else {
			$this->Category_model->insert();
			redirect('category');
		}
	}

	public function edit($id){
		$data['cat'] = $this->Category_model->getById($id);
		//$this->load->view('category/edit',$data);

		$this->form_validation->set_rules('category','category','trim|required');
		$this->form_validation->set_rules('description','description','trim|required');

		if($this->form_validation->run()==FALSE){
				$this->load->view('category/edit',$data);
			}else{
				$this->Category_model->edit($id);
				redirect('category');
		}
	}

	public function delete($id){
		$this->Category_model->delete($id);
		redirect('category');
	}

}
?>

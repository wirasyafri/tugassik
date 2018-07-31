<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category_Income extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('IC_Model');
	}

	public function index(){
		$data['list'] = $this->IC_Model->getAll();
		$this->load->view('category_income/index',$data);
	}

	public function create(){

		$this->form_validation->set_rules('category','category','trim|required');
		$this->form_validation->set_rules('description','description','trim|required');

		if ($this->form_validation->run() === FALSE) {
			$this->load->view('category_income/create');
		}else {
			$this->IC_Model->insert();
			redirect('Category_Income');
		}
	}

	public function edit($id){
		$data['cat'] = $this->IC_Model->getById($id);
		// $this->load->view('category_income/edit',$data);

		$this->form_validation->set_rules('category','category','trim|required');
		$this->form_validation->set_rules('description','description','trim|required');

		if($this->form_validation->run()==FALSE){
				$this->load->view('category_income/edit',$data);
			}else{
				$this->IC_Model->edit($id);
				redirect('Category_Income');
				//var_dump($_POST);
		}
	}

	public function delete($id){
		$this->IC_Model->delete($id);
		redirect('Category_Income');
	}

}
?>

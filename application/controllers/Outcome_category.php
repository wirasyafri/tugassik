<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Outcome_category extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('OutcomeCategory_model');
	}

	public function index(){
		$data['list'] = $this->OutcomeCategory_model->getAll();
		$this->load->view('outcome/category/index',$data);
	}

	public function create(){

		$this->form_validation->set_rules('category','category','trim|required');
		$this->form_validation->set_rules('description','description','trim|required');

		if ($this->form_validation->run() === FALSE) {
			$this->load->view('outcome/category/create');
			
		}else {
			$this->OutcomeCategory_model->insert();
			redirect('outcome_category');
		}
	}

	public function edit($id){
		$data['cat'] = $this->OutcomeCategory_model->getById($id);
		//$this->load->view('category/edit',$data);

		$this->form_validation->set_rules('category','category','trim|required');
		$this->form_validation->set_rules('description','description','trim|required');

		if($this->form_validation->run()==FALSE){
				$this->load->view('outcome/category/edit',$data);
			}else{
				$this->OutcomeCategory_model->edit($id);
				redirect('outcome_category');
		}
	}

	public function delete($id){
		$this->OutcomeCategory_model->delete($id);
		redirect('outcome_category');
	}

}
?>

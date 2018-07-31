<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Outcome extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Outcome_model');
	}

	public function index(){
		$data['list'] = $this->Outcome_model->getAll();
		$this->load->view('outcome/index',$data);
	}

	public function create(){
		$this->form_validation->set_rules('category','category','trim|required');
		$this->form_validation->set_rules('cash','cash','trim|required');
		$this->form_validation->set_rules('note','note','trim|required');
		
		if ($this->form_validation->run() === FALSE) {
			$this->load->model('OutcomeCategory_model');
			$data['data'] = $this->OutcomeCategory_model->getAll();

			//var_dump($_POST);
			$this->load->view('outcome/create',$data);	
		}else {
			$this->Outcome_model->insert();
			redirect('outcome');

		}
	}


	public function edit($id){
		$data['cat'] = $this->Outcome_model->getById($id);
		//$this->load->view('product/edit',$data);
		$this->load->model('OutcomeCategory_model');
		$data['data'] = $this->OutcomeCategory_model->getAll();

		$this->form_validation->set_rules('category','category','trim|required');
		$this->form_validation->set_rules('cash','cash','trim|required');
		$this->form_validation->set_rules('note','note','trim|required');

		if($this->form_validation->run() == FALSE){
				$this->load->view('outcome/edit',$data);
			}else{
				$this->Outcome_model->edit($id);
				redirect('outcome');
		}
	}

	public function delete($id){
		$this->Outcome_model->delete($id);
		redirect('outcome');
	}

}

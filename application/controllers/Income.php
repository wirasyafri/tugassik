<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Income extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Income_model');
	}

	public function index(){
		$data['list'] = $this->Income_model->getAll();
		$this->load->view('income/index',$data);
	}

	public function create(){
		$this->form_validation->set_rules('category','category','trim|required');
		$this->form_validation->set_rules('cash','cash','trim|required');
		$this->form_validation->set_rules('note','note','trim|required');
		
		if ($this->form_validation->run() === FALSE) {
			$this->load->model('IC_Model');
			$data['data'] = $this->IC_Model->getAll();

			//var_dump($_POST);
			$this->load->view('income/create',$data);	
		}else {
			$this->Income_model->insert();
			redirect('income');

		}
	}


	public function edit($id){
		$data['cat'] = $this->Income_model->getById($id);
		//$this->load->view('product/edit',$data);
		$this->load->model('IC_Model');
		$data['data'] = $this->IC_Model->getAll();

		$this->form_validation->set_rules('category','category','trim|required');
		$this->form_validation->set_rules('cash','cash','trim|required');
		$this->form_validation->set_rules('note','note','trim|required');

		if($this->form_validation->run()==FALSE){
				$this->load->view('income/edit',$data);
			}else{
				$this->Income_model->edit($id);
				redirect('income');
		}
	}

	public function delete($id){
		$this->Income_model->delete($id);
		redirect('income');
	}

	public function totalPerMonth(){
		$query = $this->db->query('select year(date_attemps) as year, month(date_attemps) as month, sum(cash) as total_amount from income group by year(date_attemps), month(date_attemps)'); 
		return $query->result(); 
	}

}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Keuangan extends CI_Controller {
	public function __construct(){
		parent::__construct();	
		$this->load->model('Income_model');
		$this->load->model('Outcome_model');
		$this->load->model('OutcomeCategory_model');
	}
    public function index(){
       $this->load->view('partials/header');
	   if (!$this->ion_auth->logged_in())
	   {
		   $this->session->set_flashdata('message', 'You must be an Keuangan to view this page');
		   redirect('auth');
	   }else {
	   	$data['total']  = $this->Income_model->totalPerMonth();
	   	$data['outcome']  = $this->Outcome_model->getAll();
		$data['entuts'] = $this->Income_model->getAll();
		$this->load->view('keuangan',$data);

	   }
       // $this->load->view('partials/footer');
	}
		public function income(){
		$data['list'] = $this->Income_model->getAll();
		$this->load->view('income/index',$data);
		}
		public function outcome(){
		$data['list'] = $this->Outcome_model->getAll();
		$this->load->view('outcome/index',$data);
		}	
	public function logout(){
		$this->ion_auth->logout();
		redirect('auth');
	}


}


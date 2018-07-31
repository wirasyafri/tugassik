<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hrd extends CI_Controller {
public function __construct(){
		parent::__construct();

		 $this->load->view('partials/header');
		  // $this->load->view('partials/sidebarhrd');
		  $this->load->view('partials/navbar');
		  // $this->load->view('partials/footer');
	}
    public function index(){
	   if (!$this->ion_auth->logged_in())
	   {
		   $this->session->set_flashdata('message', 'You must be an HRD to view this page');
		   redirect('auth');
	   }else {

	   	$this->load->model('AbsenModel');
	   	$data['get'] = $this->AbsenModel->getRow();

		$this->load->view('hrd',$data);
	   }

	}
	
	public function logout(){
		$this->ion_auth->logout();
		redirect('auth');
	}

}


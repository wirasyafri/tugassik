<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

public function __construct(){
		parent::__construct();
		$this->load->model('AbsenModel');

		 $this->load->view('partials/header');
		 $this->load->view('partials/sidebar');
		 $this->load->view('partials/navbar');
		 $this->load->view('partials/footer');
		  
	}
    public function index(){
       $this->load->view('partials/header');
	   if (!$this->ion_auth->logged_in())
	   {
		   $this->session->set_flashdata('message', 'You must be an admin to view this page');
		   redirect('auth');
	   }else {
	   		   	$data['get'] = $this->AbsenModel->getRow();
		$this->load->view('home',$data);
	   }
       $this->load->view('partials/footer');
	}

	public function logout(){
		$this->ion_auth->logout();
		redirect('auth');
	}

}


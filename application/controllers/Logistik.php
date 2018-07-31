<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logistik extends CI_Controller {
	public function __construct(){
		parent::__construct();
		//model
		$this->load->model('Category_model');
		$this->load->model('Product_model');
		$this->load->model('Model_transaksi');
		//partials
		 $this->load->view('partials/header');
		 $this->load->view('partials/sidebarlogis');
		 $this->load->view('partials/navbarlogis');
		 $this->load->view('partials/footer');
		  
	}
    public function index(){
       $this->load->view('partials/header');
	   if (!$this->ion_auth->logged_in())
	   {
		   $this->session->set_flashdata('message', 'You must be an Keuangan to view this page');
		   redirect('auth');
	   }else {
		$this->load->view('logistik');
	   }
       $this->load->view('partials/footer');
	}
	
		public function logout(){
			$this->ion_auth->logout();
			redirect('auth');
		}
		public function category(){
			$data['list'] = $this->Category_model->getAll();
			$this->load->view('category/index',$data);
      	}
		public function product(){
			 $data['list'] = $this->Product_model->getAll();
			$this->load->view('product/list',$data);
      	}
      	public function transaksi(){
			 
			$this->load->view('transaksi/transaksi_admin_view');
      	}

}


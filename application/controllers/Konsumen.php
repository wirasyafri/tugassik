<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Konsumen extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Model_konsumen');
	}

	public function index()
	{
	$this->load->view('konsumen/view');
	}
	public function resume(){
	
		$this->load->view('konsumen/resume');
	}
	   public function data_server()
	{
		$this->load->library('Datatables');
		$this->datatables->select('id,product,category,description,qty,price,foto');
			$this->datatables->from('product');
			echo $this->datatables->generate();
	}
	public function beli($id)
		{
			$this->load->model('Category_model');
			$data['data'] = $this->Category_model->getAll();

			$this->form_validation->set_rules('id_product','id_product','trim|required');
			$this->form_validation->set_rules('product','product','trim|required');
			$this->form_validation->set_rules('category','category','trim|required');
			$this->form_validation->set_rules('description','description','trim|required');
			$this->form_validation->set_rules('harga','harga','trim|required');
			$this->form_validation->set_rules('penerima','penerima','trim|required');
			$this->form_validation->set_rules('jumlah','jumlah','trim|required');
			$this->form_validation->set_rules('atm','atm','trim|required');
			$this->form_validation->set_rules('alamat','alamat','trim|required');
			$this->form_validation->set_rules('kota','kota','trim|required');
			$this->form_validation->set_rules('provinsi','provinsi','trim|required');
			$this->form_validation->set_rules('no_tlp','no_tlp','trim|required');
			$this->form_validation->set_rules('jasa_kirim','jasa_kirim','trim|required');
			

		$data['user']=$this->Model_konsumen->getUpdate($id);
		if ($this->form_validation->run()==FALSE)
			{
			$this->load->view('konsumen/resume',$data);
				
			}
			else{
				$this->Model_konsumen->insertTransaksi();
				$this->load->view('konsumen/view');

			}
		}
	public function logout(){
		$this->ion_auth->logout();
		redirect('auth');
	}
}

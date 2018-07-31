<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('model_transaksi');
	}

	public function index()
	{
	$this->load->view('konsumen/transaksi_view');
	}	
	public function data()
	{
	$this->load->view('transaksi/transaksi_admin_view');
	}
	public function data_server()
	{
		$this->load->library('Datatables');
		$this->datatables->select('id_tansaksi,id_product,product,category,description,harga,penerima,jumlah,atm,alamat,kota,provinsi,no_tlp,jasa_kirim,status,no_resi');
			$this->datatables->from('transaksi');
			echo $this->datatables->generate();
	}
	public function proses($id)
		{

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
			

		$data['user']=$this->model_transaksi->getUpdate($id);
		
		if ($this->form_validation->run()==FALSE)
			{
			$this->load->view('transaksi/proses',$data);
				
			}
			else{
				$this->model_transaksi->UpdateById($id);
				$this->load->view('transaksi/transaksi_admin_view');

			}
		}
	public function delete($id)
		{
			$this->model_transaksi->delete($id);
			$this->load->view('transaksi/transaksi_admin_view');
	}

}

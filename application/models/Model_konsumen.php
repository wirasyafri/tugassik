<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_konsumen extends CI_Model {
	
	public function tampil_data()
	{
		return $this->db->get('product');
	}
	public function get_product(){
		
		$hasil=$this->db->query(" SELECT * FROM product");
		return $hasil;
	}
	public function getUpdate($id)
	{
		$this->db->where('id',$id);
		$query = $this->db->get('product');
		return $query->result();
	}

	public function UpdateById($id)
	{
		$data = array
		(
			'product' =>$this->input->post('product'),
			'categoty' =>$this->input->post('categoty'),
			'description' =>$this->input->post('description'),
			
		);
		$this->db->where('id',$id);
		$this->db->Update('product',$data);
	}

  public function insertTransaksi()
	{
		$object = array
		(
			'id_product' =>$this->input->post('id_product'),
			'product' =>$this->input->post('product'),
			'category' =>$this->input->post('category'),
			'description' =>$this->input->post('description'),
			'harga' =>$this->input->post('harga'),
			'penerima' =>$this->input->post('penerima'),
			'jumlah' =>$this->input->post('jumlah'),
			'atm' =>$this->input->post('atm'),
			'alamat' =>$this->input->post('alamat'),
			'kota' =>$this->input->post('kota'),
			'provinsi' =>$this->input->post('provinsi'),
			'no_tlp' =>$this->input->post('no_tlp'),
			'jasa_kirim' =>$this->input->post('jasa_kirim'),);
		$this->db->insert('transaksi',$object);
	}
	
}

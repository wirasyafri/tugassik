<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_transaksi extends CI_Model {
	
	public function tampil_data()
	{
		return $this->db->get('transaksi');
	}
	public function get_transaksi(){
		
		$hasil=$this->db->query(" SELECT * FROM transaksi");
		return $hasil;
	}
	public function getUpdate($id)
	{
		$this->db->where('id_tansaksi',$id);
		$query = $this->db->get('transaksi');
		return $query->result();
	}

	public function UpdateById($id)
	{
		$data = array
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
			'jasa_kirim' =>$this->input->post('jasa_kirim'),
			'status' =>$this->input->post('status'),
			'no_resi' =>$this->input->post('no_resi'),
			
		);
		$this->db->where('id_tansaksi',$id);
		$this->db->Update('transaksi',$data);
	}
	public function delete ($id)
	{
		$this->db->where('id_tansaksi',$id);
		$this->db->delete('transaksi');
	}

	
}

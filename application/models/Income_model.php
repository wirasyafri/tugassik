<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Income_model extends CI_Model{

	protected $table = 'income';
	protected $pk = 'id_income';

	public function getById($id){
		$this->db->from($this->table);
		$this->db->where($this->pk,$id);
		$getById = $this->db->get();

		if($getById->num_rows() == 1){
			return $getById->result();
		}else{
			return false;
		}
	}

	public function getAll(){
		$data = $this->db->get($this->table);
		return $data->result();
	}

	public function insert(){
		date_default_timezone_set('Asia/Bangkok');
		$param = $data = array(
			'category_income'  => $this->input->post('category'),
			'cash'             => $this->input->post('cash'),
			'note'             => $this->input->post('note'),
			'date_attemps'     => $date = date('Y/m/d h:i:sa', time())
		);	
		$this->db->insert($this->table ,$param);
	}

	public function edit($id){
		date_default_timezone_set('Asia/Bangkok');
		$param = array(
			'category_income'  => $this->input->post('category'),
			'cash'             => $this->input->post('cash'),
			'note'             => $this->input->post('note'),
			'date_attemps'     => $date = date('Y/m/d h:i:sa', time())
		);
		$this->db->where($this->pk,$id);
		$this->db->update($this->table ,$param);
	}

	public function delete($id){
		$this->db->where($this->pk,$id);
		$this->db->delete($this->table);
	}

	public function totalPerMonth(){
		$query = $this->db->query('select year(date_attemps) as year, month(date_attemps) as month, sum(cash) as total_amount from income group by year(date_attemps), month(date_attemps)'); 
		return $query->result(); 
	}



}

?>

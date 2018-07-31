<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Outcome_model extends CI_Model{

	protected $table = 'outcome';
	protected $pk = 'id_outcome';

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
			'category'       => $this->input->post('category'),
			'cash'           => $this->input->post('cash'),
			'note'           => $this->input->post('note'),
			'date_attemps'   => $date = date('Y/m/d h:i:sa', time())
		);	
		$this->db->insert($this->table ,$param);
	}

	public function edit($id){
		date_default_timezone_set('Asia/Bangkok');
		$param = array(
			'category'       => $this->input->post('category'),
			'cash'           => $this->input->post('cash'),
			'note'           => $this->input->post('note'),
			'date_attemps'   => $date = date('Y/m/d h:i:sa', time())
		);
		$this->db->where($this->pk,$id);
		$this->db->update($this->table ,$param);
	}

	public function delete($id){
		$this->db->where($this->pk,$id);
		$this->db->delete($this->table);
	}

}

?>

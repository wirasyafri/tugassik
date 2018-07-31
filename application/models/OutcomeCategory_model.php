<?php defined('BASEPATH') OR exit('No direct script access allowed');

class OutcomeCategory_model extends CI_Model{

	protected $table = 'outcome_category';
	protected $pk = 'id';

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
		$param = $data = array(
			'name' 	   => $this->input->post('category'),
			'desc'     => $this->input->post('description'),
		);
		$this->db->insert($this->table ,$param);
	}

	public function edit($id){
		$param = array(
			'name' 	=> $this->input->post('category'),
			'desc'  => $this->input->post('description'),
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

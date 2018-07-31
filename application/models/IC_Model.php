<?php defined('BASEPATH') OR exit('No direct script access allowed');

class IC_Model extends CI_Model{

	protected $table = 'category_income';
	protected $pk = 'id_cat_income';

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
			'category_name' 	       => $this->input->post('category'),
			'note'  => $this->input->post('description'),
		);	
		$this->db->insert($this->table ,$param);
	}

	public function edit($id){
		$param = array(
			'category_name' => $this->input->post('category'),
			'note'          => $this->input->post('description'),
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

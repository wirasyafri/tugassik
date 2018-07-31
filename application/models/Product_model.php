<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Product_model extends CI_Model{

	protected $table = 'product';
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
		$param = array(
			'product' 	  => $this->input->post('product'),
			'category'    => $this->input->post('category'),
			'description' => $this->input->post('description'),
			'qty'         => $this->input->post('qty'),
			'price'       => $this->input->post('price'),
			'foto' 		  =>$this->upload->data('raw_name').'_thumb'.$this->upload->data('file_ext'),
		);
		$this->db->insert($this->table ,$param);
	}

	public function edit($id){
		$data = array(
			'product' 	  => $this->input->post('product'),
			'category'    => $this->input->post('category'),
			'description' => $this->input->post('description'),
			'qty'         => $this->input->post('qty'),
			'price'       => $this->input->post('price'),
			'foto' 		  =>$this->upload->data('raw_name').'_thumb'.$this->upload->data('file_ext'),
			
		);
		$this->db->where('id',$id);
		$this->db->update('product',$data);
	}	
	public function edit2($id){
		$data = array(
			'product' 	  => $this->input->post('product'),
			'category'    => $this->input->post('category'),
			'description' => $this->input->post('description'),
			'qty'         => $this->input->post('qty'),
			'price'       => $this->input->post('price'),
			
		);
		$this->db->where('id',$id);
		$this->db->update('product',$data);
	}

	public function delete($id){
		$this->db->where($this->pk,$id);
		$this->db->delete($this->table);
	}

}

?>

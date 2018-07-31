<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class cetak_model extends CI_Model
{
	
	public function view_income()
	{
		$this->db->select("category_income,cash,note,date_attemps");
		$query = $this->db->get('income');
		return $query->result();
	}

	public function view_row_income()
	{
		$this->db->select("category_income,cash,note,date_attemps");
		$query = $this->db->get('income');
		return $query->result();
	}

	public function view_outcome()
	{
		$this->db->select("category,cash,note,date_attemps");
		$query = $this->db->get('outcome');
		return $query->result();
	}

	public function view_row_outcome()
	{
		$this->db->select("category,cash,note,date_attemps");
		$query = $this->db->get('outcome');
		return $query->result();
	}
}

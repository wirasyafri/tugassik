<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AbsenModel extends CI_Model {
    
	public function getRow()
	{
		$query = $this->db->get('users');
		return $query->result();
	}
}
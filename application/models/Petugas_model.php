<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Petugas_model extends CI_Model {

	public function __construct() {
		parent::__construct();
		$this->load->database();
	}

	public function data()
	{
		$this->db->select('*');
		$this->db->from('user');

		$query = $this->db->get();
		return $query->result_array();
	}

	public function delete ($data){
		$this->db->where('idUser',$data['idUser']);
		$this->db->delete('user',$data);
	}

}
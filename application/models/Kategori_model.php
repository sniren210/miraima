<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori_model extends CI_Model {

	public function __construct() {
		parent::__construct();
		$this->load->database();
	}

	public function getData()
	{
		$this->db->select('*');
		$this->db->from('kategori_posting');
		$query = $this->db->get();
		return $query->result_array();
	}

	public function data()
	{
		$this->db->select('*');
		$this->db->from('kategori_posting');
		$query = $this->db->get();
		return $query->result_array();
	}

	public function delete ($data){
		$this->db->where('idKategori',$data['idKategori']);
		$this->db->delete('kategori_posting',$data);
	}

		// detail perberita
	public function detail($idKategori){
		$this->db->select('*');
		$this->db->from('kategori_posting');
		$this->db->where('idKategori',$idKategori);
		$query = $this->db->get();
		// $this->db->get_where('posting',array('idPosting'  => $idPosting));
		return $query->row();
	}

	public function edit ($data) {
		$this->db->where('idKategori', $data['idKategori']);
		$this->db->update('kategori_posting', $data);
	}
}
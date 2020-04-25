<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ajuan_model extends CI_Model {

	public function __construct() {
		parent::__construct();
		$this->load->database();
	}

	public function data()
	{
		$this->db->select('ajuan.judul,ajuan.tanggal,kategori_posting.kategori,ajuan.idAjuan');
		$this->db->from('ajuan');
		$this->db->join('kategori_posting','kategori_posting.idKategori = ajuan.idKategori');
		$query = $this->db->get();
		return $query->result_array();
	}

	public function detail($idAjuan){
		$this->db->select('ajuan.*,kategori_posting.*');
		$this->db->from('ajuan');
		$this->db->join('kategori_posting','kategori_posting.idKategori = ajuan.idKategori');
		$this->db->where('idAjuan',$idAjuan);
		$query = $this->db->get();
		// $this->db->get_where('ajuan',array('idPosting'  => $idPosting));
		return $query->row();
	}

	public function delete ($data){
		$this->db->where('idAjuan',$data['idAjuan']);
		$this->db->delete('ajuan',$data);
	}

	public function getAll($data)
	{
		$this->db->select('*');
		$this->db->from('ajuan');
		$this->db->where('idAjuan',$data);

		$query = $this->db->get();
		return $query->result_array();	
	}
}
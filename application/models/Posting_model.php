<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Posting_model extends CI_Model {

	public function __construct() {
		parent::__construct();
		$this->load->database();
	}

	// detail perberita
	public function detail($idPosting){
		$this->db->select('posting.*,user.*,kategori_posting.*');
		$this->db->from('posting');
		$this->db->join('user','user.idUser = posting.idUser');
		$this->db->join('kategori_posting','kategori_posting.idKategori = posting.idKategori');
		$this->db->where('idPosting',$idPosting);
		$query = $this->db->get();
		// $this->db->get_where('posting',array('idPosting'  => $idPosting));
		return $query->row();
	}

	public function home()
	{
		$this->db->select('posting.thumbnail,posting.idPosting');
		$this->db->from('posting');
		$query = $this->db->get();
		// $this->db->get_where('posting',array('idPosting'  => $idPosting));
		return $query->result_array();
	}

	public function data()
	{
		$this->db->select('posting.judul,posting.tanggal,posting.thumbnail,posting.deskripsi,user.username,kategori_posting.kategori,posting.idPosting');
		$this->db->from('posting');
		$this->db->join('user','user.idUser = posting.idUser');
		$this->db->join('kategori_posting','kategori_posting.idKategori = posting.idKategori');
		$query = $this->db->get();
		return $query->result_array();
	}

	public function tambah($data) {
		$this->db->insert('berita',$data);
	}

	// Edit 
	public function edit ($data) {
		$this->db->where('idPosting', $data['idPosting']);
		$this->db->update('posting', $data);
	}
	
	// Delete
	public function delete ($data){
		$this->db->where('idPosting',$data['idPosting']);
		$this->db->delete('posting',$data);
	}

	public function eskul()
	{
		$this->db->select('*');
		$this->db->from('posting');
		$this->db->where('idKategori','1');
		$query = $this->db->get();
		return $query->result_array();
	}

	public function mading()
	{
		$this->db->select('*');
		$this->db->from('posting');
		$this->db->where('idKategori','2');
		$query = $this->db->get();
		return $query->result_array();
	}

	public function search($keyword)
	{    
	    $this->db->like('judul', $keyword);

	    $result = $this->db->get('posting')->result_array(); 
	    return $result;
	}

}
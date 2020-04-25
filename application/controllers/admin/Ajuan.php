<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ajuan extends CI_Controller {

	public function index()
	{
		$data['row'] = $this->ajuan_model->data();
		
		$this->layout_admin->tampil('ajuan/data',$data);
	}

	public function detail($col)
	{
		$data['row'] = $this->ajuan_model->detail($col);

		$this->layout_admin->tampil('ajuan/detail',$data);
	}

	public function delete($col)
	{
		$data['idAjuan'] = $col;
		$this->db->where('idAjuan',$col);
		$query = $this->db->get('ajuan');
		$row = $query->row();

		unlink("upload/ajuan/$row->thumbnail");
		$this->ajuan_model->delete($data);
		$this->session->set_flashdata('sukses','Data telah didelete');
		redirect(base_url('admin/ajuan/'));	
	}

	public function publish($col)
	{	
		$data = $this->ajuan_model->getAll($col);
	
	 	$data =  array(
				'idPosting' => '',
				'deskripsi' => $data[0]['deskripsi'],
				'tanggal' => date('Y-m-d'),
				'thumbnail' => $data[0]['thumbnail'],
				'idKategori' => $data[0]['idKategori'],
				'idUser' => $this->session->userdata('idUser'),
				'judul' => $data[0]['judul']
			);

		$this->db->insert('posting',$data);
		$this->del($col);		
	}

	public function del($col)
	{
		$data['idAjuan'] = $col;
	
		$this->ajuan_model->delete($data);
		$this->session->set_flashdata('sukses','Ajuan berhasil dipublish ');
		redirect(base_url('admin/posting/'));
	}
}
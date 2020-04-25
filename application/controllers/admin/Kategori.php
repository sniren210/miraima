<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends CI_Controller {

	public function index()
	{
		$data['row'] = $this->kategori_model->data();
		$this->layout_admin->tampil('kategori/data',$data);
	}

	public function tambah()
	{
		// validasi form
		$this->form_validation->set_rules('kategori','Nama produk','required',
			array(	'required'		=> 'Judul harus diisi',));
		if ($this->form_validation->run() == false) {

			$this->layout_admin->tampil('kategori/tambah');
		}else{
			if ($this->input->post('submit')) {
				
					$data =  array(
							'idKategori' => ' ',
							'kategori' => $this->input->post('kategori'),
						);
					$this->session->set_flashdata('sukses','Data berhasil dibuat');
					$this->db->insert('kategori_posting',$data);
					redirect(base_url('admin/kategori'));
			}
		}
	}

	public function edit($col)
	{
		$data['row'] = $this->kategori_model->detail($col);
		// validasi form
		$this->form_validation->set_rules('kategori','Nama produk','required',
			array(	'required'		=> 'Judul harus diisi',));
		if ($this->form_validation->run() == false) {

			$this->layout_admin->tampil('kategori/edit',$data);
		}else{
			if ($this->input->post('submit')) {
				
					$data =  array(
							'idKategori' => $col,
							'kategori' => $this->input->post('kategori'),
						);
					$this->session->set_flashdata('sukses','Data berhasil dibuat');
					$this->kategori_model->edit($data);
					redirect(base_url('admin/kategori'));
			}
		}
	}

	public function delete($col)
	{
		$data['idKategori'] = $col;
		$this->kategori_model->delete($data);
		$this->session->set_flashdata('sukses','Data telah didelete');
		redirect(base_url('admin/kategori'));	
	}
}
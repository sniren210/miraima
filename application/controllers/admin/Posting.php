<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Posting extends CI_Controller {

	public function index()
	{
		$data['row'] = $this->posting_model->data();
		$this->layout_admin->Tampil('posting/data',$data);
	}

	public function tambah()
	{
		$data['kategori'] = $this->kategori_model->getData();
		// validasi form
		$this->form_validation->set_rules('judul','Nama produk','required',
			array(	'required'		=> 'Judul harus diisi',));
		if ($this->form_validation->run() == false) {

			$this->layout_admin->tampil('posting/tambah',$data);
		}else{
			if ($this->input->post('submit')) {
				$config['upload_path'] 		= './upload/thumb';
				$config['allowed_types'] 	= 'gif|jpg|png|svg';
				$config['max_size']			= 30000; // KB
				$nmfile = "file_".time(); 
				$config['file_name'] = $nmfile; 
				$this->load->library('upload',$config);

				if (!$this->upload->do_upload('gambar')) {
					$this->session->set_flashdata('gagal','gambar gagal di upload');
					$this->layout_admin->tampil('posting/tambah',$data);
				}else{


					$upload_data				= array('uploads' =>$this->upload->data());
					// Image Editor
					$config['image_library']	= 'gd2'; 
					$config['new_image'] 		= 'upload/thumb/'.$upload_data['uploads']['file_name'];
					$config['create_thumb'] 	= TRUE;
					$config['quality'] 			= "100%";
					$config['maintain_ratio'] 	= TRUE;
					$config['width'] 			= 950; // Pixel
					$config['height'] 			= 500; // Pixel
					$config['x_axis'] 			= 0;
					$config['y_axis'] 			= 0;
					$config['thumb_marker'] 	= '';
					$this->load->library('image_lib', $config);
					$this->image_lib->resize();

					$data =  array(
							'idPosting' => '',
							'deskripsi' => $this->input->post('deskripsi'),
							'tanggal' => date('Y-m-d'),
							'thumbnail' => $upload_data['uploads']['file_name'],
							'idKategori' => $this->input->post('kategori'),
							'idUser' => $this->session->userdata('idUser'),
							'judul' => $this->input->post('judul')
						);
					$this->session->set_flashdata('sukses','Data berhasil dibuat');
					$this->db->insert('posting',$data);
					redirect(base_url('admin/posting'));
				}
			}
		}
	}


	public function detail($col)
	{
		$data['row'] = $this->posting_model->detail($col);
		$this->layout_admin->tampil('posting/detail',$data);
	}

	public function edit($col)
	{
		$data['row'] = $this->posting_model->detail($col);
		$data['kategori'] = $this->kategori_model->getData($col);

		// validasi form
		$this->form_validation->set_rules('judul','Nama produk','required',
			array(	'required'		=> 'Judul harus diisi',));
		if ($this->form_validation->run() == false) {

			$this->layout_admin->tampil('posting/edit',$data);
		}else{
			if ($this->input->post('submit')) {
				$config['upload_path'] 		= './upload/';
				$config['allowed_types'] 	= 'gif|jpg|png|svg';
				$config['max_size']			= 30000; // KB

				$this->load->library('upload',$config);

				if(!empty($_FILES['gambar']['name'])) {

					if (!$this->upload->do_upload('gambar')) {
					$this->session->set_flashdata('gagal','gambar gagal di upload');
					$this->layout_admin->tampil('posting/edit/',$data);
					}else{



						$upload_data				= array('uploads' =>$this->upload->data());
						// Image Editor
						$config['image_library']	= 'gd2';
						$config['new_image'] 		= 'upload/thumb/'.$upload_data['uploads']['file_name'];
						$config['create_thumb'] 	= TRUE;
						$config['quality'] 			= "100%";
						$config['maintain_ratio'] 	= TRUE;
						$config['width'] 			= 360; // Pixel
						$config['height'] 			= 200; // Pixel
						$config['x_axis'] 			= 0;
						$config['y_axis'] 			= 0;
						$config['thumb_marker'] 	= '';
						$this->load->library('image_lib', $config);
						$this->image_lib->resize();

						$data =  array(
								'idPosting' => $col,
								'deskripsi' => $this->input->post('deskripsi'),
								'tanggal' => date('Y-m-d'),
								'thumbnail' => $upload_data['uploads']['file_name'],
								'idKategori' => $this->input->post('kategori'),
								'idUser' => $this->session->userdata('idUser'),
								'judul' => $this->input->post('judul')
							);
						$this->session->set_flashdata('sukses','Data berhasil mengedit');
						$this->posting_model->edit($data);
						redirect(base_url('admin/posting'));
					}
				}else{
					$data =  array(
								'idPosting' => $col,
								'deskripsi' => $this->input->post('deskripsi'),
								'idKategori' => $this->input->post('kategori'),
								'idUser' => $this->session->userdata('idUser'),
								'judul' => $this->input->post('judul')
							);
					$this->session->set_flashdata('sukses','Data berhasil mengedit');
					$this->posting_model->edit($data);
					redirect(base_url('admin/posting'));
				}
			}
		}
	}

	public function delete($col)
	{
		$data['idPosting'] = $col;
		$this->db->where('idPosting',$col);
		$query = $this->db->get('posting');
		$row = $query->row();

		unlink("upload/thumb/$row->thumbnail");
		$this->posting_model->delete($data);
		$this->session->set_flashdata('sukses','Data telah didelete');
		redirect(base_url('admin/posting/'));	
	}
}
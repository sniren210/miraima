<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ajuan extends CI_Controller {

	public function index()
	{
		// $data['kategori'] = $this->kategori_model->getData();

		$data['active'] = 'colorlib-active';
		$this->layout->tampilan('ajuan',$data);
	}

	public function post()
	{
		$this->form_validation->set_rules('judul','Nama produk','required',
			array(	'required'		=> 'Judul harus diisi',));

		if ($this->form_validation->run() == false) {

			$this->layout->tampilan('ajuan');
		}else{
			if ($this->input->post('submit')) {
				$config['upload_path'] 		= './upload/thumb';
				$config['allowed_types'] 	= 'gif|jpg|png|svg';
				$config['max_size']			= 30000; // KB
				$nmfile = "file_".time(); 
				$config['file_name'] = $nmfile; 

				// var_dump($_POST);
				// die;
				$this->load->library('upload',$config);

				if (!$this->upload->do_upload('gambar')) {
					$this->session->set_flashdata('gagal','gambar gagal di upload');
					$this->layout->tampilan('ajuan');
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
							'idAjuan' => '',
							'judul' => $this->input->post('judul'),
							'deskripsi' => $this->input->post('deskripsi'),
							'thumbnail' => $upload_data['uploads']['file_name'],
							'idKategori' => $this->input->post('kategori'),
							'tanggal' => date('Y-m-d')
						);
					$this->session->set_flashdata('sukses','Data berhasil dibuat');
					$this->db->insert('ajuan',$data);
					$this->layout->tampilan('ajuan');
				}
			}
		}
	}
}
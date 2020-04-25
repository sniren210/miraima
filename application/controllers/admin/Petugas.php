<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Petugas extends CI_Controller {

	public function index()
	{
		$data['row'] = $this->petugas_model->data();
		$this->layout_admin->tampil('petugas/data',$data);
	}

	public function tambah()
	{
		

        $this->form_validation->set_rules('username', 'username', 'required|trim',[
        	'required' => 'isi username'
        ]);
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]', [
            'matches' => 'password tidak cocok',
            'min_length' => 'password pendek'
        ]);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');

		if ($this->form_validation->run() == false) {

			$this->layout_admin->tampil('petugas/tambah');
		}else{
			if ($this->input->post('submit')) {
				$config['upload_path'] 		= './upload/admin';
				$config['allowed_types'] 	= 'gif|jpg|png|svg';
				$config['max_size']			= 30000; // KB
				$nmfile = "file_".time(); 
				$config['file_name'] = $nmfile; 
				$this->load->library('upload',$config);

				if (!$this->upload->do_upload('gambar')) {
					$this->session->set_flashdata('gagal','gambar gagal di upload');
					$this->layout_admin->tampil('petugas/tambah');
				}else{


					$upload_data				= array('uploads' =>$this->upload->data());
					// Image Editor
					$config['image_library']	= 'gd2'; 
					$config['new_image'] 		= 'upload/admin/'.$upload_data['uploads']['file_name'];
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
							'idUser' => '',
							'username' => $this->input->post('username'),
							'password' =>  password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
							'profil' => $upload_data['uploads']['file_name'],
						);

					$this->session->set_flashdata('sukses','Data berhasil dibuat');
					$this->db->insert('user',$data);
					redirect(base_url('admin/petugas'));
				}
			}
		}
	}

	public function delete($col)
	{
		$data['idUser'] = $col;
		$this->db->where('idUser',$col);
		$query = $this->db->get('user');
		$row = $query->row();

		unlink("upload/admin/$row->profil");
		$this->petugas_model->delete($data);
		$this->session->set_flashdata('sukses','Data telah didelete');
		redirect(base_url('admin/petugas/'));
	}

}
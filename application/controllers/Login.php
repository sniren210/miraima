<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		if ($this->session->userdata('idUser')) {
			redirect(base_url('admin'));
		}else{

			$this->form_validation->set_rules('username','Username','trim|required');
			$this->form_validation->set_rules('password','Password','trim|required');

			if ($this->form_validation->run() == false) {
		
				$this->load->view('global/login');
			}else{
				$this->log();
			}
		}
	}

	private function log()
	{
		$user = $this->input->post('username');
		$pass = $this->input->post('password');

		$row = $this->db->get_where('user', ['username' => $user])->row_array();

		if ($row) {
			if (password_verify($pass,$row['password'])) {
				$data = [
					'idUser' => $row['idUser'],
					'profil' => $row['profil']
				];
				$this->session->set_userdata($data);
				redirect(base_url('admin'));

			}else{
				$this->session->set_flashdata('gagal','Password Tidak Cocok');
				redirect(base_url('login'));
			}
		}else{
			$this->session->set_flashdata('gagal','Akun Tidak Ada');
			redirect(base_url('login'));
		}
	}
	
	public function logout()
	{
		$this->session->unset_userdata('idUser');
		$this->session->unset_userdata('profil');

		redirect(base_url('home'));
	} 
}
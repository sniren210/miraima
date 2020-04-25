<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dasboard extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if (!$this->session->userdata('idUser')) {
			redirect(base_url('login'));
		}
	}

	public function index()
	{
		$this->layout_admin->Tampil('dasboard');
	}
}
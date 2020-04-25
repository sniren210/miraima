<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Layout_admin {
	
	// SET SUPER GLOBAL
	var $CI = NULL;
	public function __construct() {
		$this->CI =& get_instance();
	}

	public function Tampil($tampil,$data = null)
	{
		$this->CI->load->view('admin/template/header');
		$this->CI->load->view('admin/template/nav');
		$this->CI->load->view('admin/'.$tampil,$data);
		$this->CI->load->view('admin/template/footer');
	}
}
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$data['row'] = $this->posting_model->home();
		$this->layout->tampilan('home',$data);
	}

	public function read($col)
	{
		$data['row'] = $this->posting_model->detail($col);
		$this->layout->tampilan('read',$data);
	}


}
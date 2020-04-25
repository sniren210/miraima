<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Search extends CI_Controller {

	public function index()
	{
		$keyword = $this->input->get('keyword');
		$data['row'] = $this->posting_model->search($keyword);

		if (empty($data['row'])) {
			$this->layout->tampilan('blank',$data);
		}else{
			$this->layout->tampilan('home',$data);
		}
		
	}
}
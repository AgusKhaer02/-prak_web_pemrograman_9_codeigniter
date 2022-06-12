<?php

class Blog extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		
	}
	public function index()
	{

		$data['title'] = "Blog";
		$data['contents'] = "front/blog/blog";
		$this->load->view('front/layout/template', $data);
	}
}

?>

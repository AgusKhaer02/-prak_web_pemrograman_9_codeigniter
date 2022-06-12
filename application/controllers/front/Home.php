<?php


	class Home extends CI_Controller
	{
		function __construct()
		{
			parent::__construct();
		}

		public function index()
		{
			$data['title'] = "User";
			$data['contents'] = "front/home/home";
			$this->load->view('front/layout/template', $data);
		}
	}
	
?>

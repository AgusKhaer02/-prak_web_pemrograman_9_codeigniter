<?php

	class User extends CI_Controller
	{
		public function index()
		{
			$data['title'] = "User";
			$data['contents'] = 'admin/user/user_view';
			$this->load->view('admin/layout/template', $data);
		}
	}
	

?>

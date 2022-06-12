<?php


class Dashboard extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data['username'] = $this->session->userdata('username');
		$data['title'] = "Dashboard";
		$data['contents'] = "admin/dashboard/home";
		$this->load->view("admin/layout/template", $data);
	}
}

?>

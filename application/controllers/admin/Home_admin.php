<?php

class Home_admin extends CI_controller
{
	
	public function index()
	{
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/home_admin');
		$this->load->view('templates_admin/footer');
	}
}
<?php 

class Login extends CI_Controller
{

public function log()
	{
		$this->load->helper('url');
		$this->load->view("teamplates/header");
		$this->load->view("taskbar/login");
		
		$this->load->view("teamplates/footer");
	}
}
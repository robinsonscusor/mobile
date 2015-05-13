<?php 

class Details extends CI_Controller
{
	public function detail()
	{
		$this->load->helper('url');
		$this->load->view("teamplates/header");
		$this->load->view("details/detail");
		$this->load->view("teamplates/footer");
	}
}
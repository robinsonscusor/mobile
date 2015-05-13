<?php 
/**
* 
*/
class News extends CI_Controller
{
	
	public function neww()
	{
		$this->load->helper('url');
		$this->load->view("teamplates/header");
		$this->load->view("news/news");
		$this->load->view("teamplates/footer");
	}
}
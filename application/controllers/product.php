<?php  


/**
* 
*/
class Product extends CI_Controller
{
	
	public function products()
	{
		$this->load->helper('url');
		$this->load->view("teamplates/header");
		$this->load->view("products/product");
		$this->load->view("teamplates/footer");


	}
}
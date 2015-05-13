
<?php 

class Homepage extends CI_Controller{
	

	public function index()
	{
		$this->load->helper('url');
		$this->load->view("teamplates/header");
		$this->load->view("home");
		$this->load->view("teamplates/footer");
	}

}
?>
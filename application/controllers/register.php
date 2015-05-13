<?php 



class Register extends CI_Controller
	{

		public function __construct()
		{
			parent::__construct();
			$this->load->model('model_mobi');
		}
		public function reg()
		{
			$taikhoan = array();
			$this->load->helper('url');
			$this->load->view("teamplates/header");
			$this->load->view("taskbar/register");
			if(!empty($_POST['submit'])){
				$taikhoan = array(
					'tentk' => $_POST['tentk'],
					'matkhau' => $_POST['matkhau'],
					'dienthoai' => $_POST['dienthoai'],
					'diachi' => $_POST['diachi']
				 );
				if($this->model_mobi->thanhvien($taikhoan)==true){
					echo "<script>alert('Đăng kí thành công');window.location = '".base_url()."login/log'</script>";
				}else{
					echo "<script>alert('không thể thực hiện thao tác')</script>";
				}
			}
			$this->load->view("teamplates/footer");
		}
	}



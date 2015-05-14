<?php 


class Administrator extends CI_Controller{
	
	public function __construct()
		{
			parent::__construct();
			$this->load->model('model_mobi');
		}
		
	public function index()
		{
			session_start();
			$this->load->helper('url');
			$data['info'] = $this->model_mobi->admin_user();
			$this->load->view('teamplates/admin_header');
			$this->load->view('admin/admin',$data);
			$param = $this->uri->segment(3);
			if($param == true){
				$this->model_mobi->admin_user_delete($param);	
				echo "<script>window.location = '".base_url()."administrator/index'</script>";			
			}
			$this->load->view('teamplates/admin_footer');
		} 

		public function updatetk()
		{
			session_start();
			$this->load->helper('url');
			$param = $this->uri->segment(3);
			$data['info'] = $this->model_mobi->admin_user($param);
			$this->load->view('teamplates/admin_header');
			$this->load->view('admin/suataikhoan',$data);
			if(isset($_POST['suatk'])){
				$update = array(
					'matkhau' => $_POST['matkhau'], 
					'quyen' => $_POST['quyen'], 
					'dienthoai' => $_POST['dienthoai'], 
					'diachi' => $_POST['diachi']
					);
				$this->model_mobi->admin_user_update($param,$update);
				echo "<script>window.location = '".base_url()."administrator/index'</script>";
			}
			$this->load->view('teamplates/admin_footer');
		}

	public function sanpham()
	{
		session_start();
		$this->load->helper('url');

		$data["info"] = $this->model_mobi->admin_product();
		

		$this->load->view('teamplates/admin_header');
		$this->load->view('admin/sanpham',$data);

		$param = $this->uri->segment(3);
			if($param == true){
				$this->model_mobi->admin_product_delete($param);
				echo "<script>window.location = '".base_url()."administrator/sanpham'</script>";				
			}

		$this->load->view('teamplates/admin_footer');
	}

	public function updatesp()
	{
		session_start();
		$this->load->helper('url');

		$param = $this->uri->segment(3);
		$data['info'] = $this->model_mobi->admin_product($param);
		$data["ca"] = $this->model_mobi->admin_category();

		$this->load->view('teamplates/admin_header');
		$this->load->view('admin/suasanpham',$data);

		if(isset($_POST['suasp'])){
			if(!empty($_POST['hinh'])){
				$updatedt = array(
					'tendienthoai' => $_POST['dienthoai'], 
					'gia' => $_POST['gia'], 
					'hinh' => $_POST['hinh'], 
					'idLoai' => $_POST['loai']
					);
			}else{
				$updatedt = array(
					'tendienthoai' => $_POST['dienthoai'], 
					'gia' => $_POST['gia'],
					'idLoai' => $_POST['loai']
					);
			}
				$updatectdt = array(
					'manhinh' => $_POST['manhinh'],
					'cpu' => $_POST['cpu'],
					'ram' => $_POST['ram'],
					'hedieuhanh' => $_POST['hedieuhanh'],
					'camerachinh' => $_POST['camerachinh'],
					'cameraphu' => $_POST['cameraphu'],
					'bonhotrong' => $_POST['bonhotrong'],
					'thenhongoai' => $_POST['thenhongoai'],
					'pin' => $_POST['pin'],
					);
				$this->model_mobi->admin_product_update($param,$updatedt);
				$this->model_mobi->admin_dtproduct_update($param,$updatectdt);
				echo "<script>window.location = '".base_url()."administrator/sanpham'</script>";
			}

		$this->load->view('teamplates/admin_footer');
	}

	public function insertsp()
	{
		session_start();
		$this->load->helper('url');
		$data["ca"] = $this->model_mobi->admin_category();
		
		$this->load->view('teamplates/admin_header');
		$this->load->view('admin/themsanpham',$data);
		if(isset($_POST['themsp'])){
				$values = array(
					'dienthoai' => array(
						'tendienthoai' => $_POST['dienthoai'], 
						'gia' => $_POST['gia'],
						'idLoai' => $_POST['loai'],
						'hinh' => @$_POST['hinh']
						)
					);

				$this->model_mobi->admin_product_insert($values);

				$IdSP = $this->model_mobi->admin_idsp();


				$values = array(
					'chitiet' => array(
						'manhinh' => $_POST['manhinh'],
						'cpu' => $_POST['cpu'],
						'ram' => $_POST['ram'],
						'hedieuhanh' => $_POST['hedieuhanh'],
						'camerachinh' => $_POST['camerachinh'],
						'cameraphu' => $_POST['cameraphu'],
						'bonhotrong' => $_POST['bonhotrong'],
						'thenhongoai' => $_POST['thenhongoai'],
						'pin' => $_POST['pin'],
						'idSP' => $IdSP['id']
						)
					);

				$this->model_mobi->admin_product_insert($values);
				
				echo "<script>window.location = '".base_url()."administrator/sanpham'</script>";
			}
		$this->load->view('teamplates/admin_footer');
	}

	public function tintuc()
	{
		session_start();
		$this->load->helper('url');
		$this->load->view('teamplates/admin_header');

		$data['info'] = $this->model_mobi->admin_new();

		$this->load->view('admin/tintuc',$data);

		$param = $this->uri->segment(3);
			if($param == true){
				$this->model_mobi->admin_new_delete($param);
				echo "<script>window.location = '".base_url()."administrator/tintuc'</script>";				
			}


		$this->load->view('teamplates/admin_footer');
	}

	public function updatett()
	{
		session_start();
		$this->load->helper('url');
		$this->load->view('teamplates/admin_header');

		$param = $this->uri->segment(3);
		$data['info'] = $this->model_mobi->admin_new($param);

		$this->load->view('admin/suatintuc',$data);

		if(isset($_POST['suatt'])){
			if(!empty($_POST['hinh']))
			{
				$update = array(
					'tieude' => $_POST['tieude'], 
					'tomtat' => $_POST['tomtat'], 
					'noidung' => $_POST['noidung'], 
					'hinh' => $_POST['hinh']
					);
			}
			else
			{
				$update = array(
					'tieude' => $_POST['tieude'], 
					'tomtat' => $_POST['tomtat'], 
					'noidung' => $_POST['noidung'], 
					
					);
			}
				$this->model_mobi->admin_new_update($param,$update);
				echo "<script>window.location = '".base_url()."administrator/tintuc'</script>";
			}

		$this->load->view('teamplates/admin_footer');
	}

	public function inserttt()
	{
		session_start();
		$this->load->helper('url');
		$this->load->view('teamplates/admin_header');
		$this->load->view('admin/themtintuc');
		if (isset($_POST['themtt'])) {
			$param = array(
					'tieude' => $_POST['tieude'],
					'tieude' => $_POST['tieude'], 
					'tomtat' => $_POST['tomtat'], 
					'noidung' => $_POST['noidung'], 
					'hinh' => @$_POST['hinh']
				);
			$this->model_mobi->admin_new_insert($param);
			echo "<script>window.location = '".base_url()."administrator/tintuc'</script>";
		}
		$this->load->view('teamplates/admin_footer');

	}

	public function donhang()
	{
		session_start();
		$this->load->helper('url');
		$this->load->view('teamplates/admin_header');
		$this->load->view('admin/donhang');
		$this->load->view('teamplates/admin_footer');
	}

	public function updatedh()
	{
		session_start();
		$this->load->helper('url');
		$this->load->view('teamplates/admin_header');
		$this->load->view('admin/suadonhang');
		$this->load->view('teamplates/admin_footer');
	}
}
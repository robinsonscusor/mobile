<?php 


class Administrator extends CI_Controller{
	
	public function __construct()
		{
			parent::__construct();
			$this->load->model('model_mobi');
		}
		
	public function index()
		{
			$this->load->helper('url');
			if($this->session->userdata('quyen') == 1)
			{
						
				$data['info'] = $this->model_mobi->admin_user();
				$this->load->view('teamplates/admin_header');
				$this->load->view('admin/admin',$data);
				$param = $this->uri->segment(3);
				if($param == true){
					$this->model_mobi->admin_user_delete($param);	
					redirect('/administrator/index','refresh');		
				}

				$this->load->view('teamplates/admin_footer');
			}
			else
			{
				redirect('/homepage/index','refresh');
			}
		} 

		public function updatetk()
		{
			
			$this->load->helper('url');
			if($this->session->userdata('quyen') == 1)
			{

			
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
					redirect('/administrator/index','refresh');		
				}
				$this->load->view('teamplates/admin_footer');
			}
			else
			{
				redirect('/homepage/index','refresh');
			}
		}

	public function sanpham()
	{
		$this->load->helper('url');
		if($this->session->userdata('quyen') == 1)
		{
		

			$data["info"] = $this->model_mobi->admin_product();
			

			$this->load->view('teamplates/admin_header');
			$this->load->view('admin/sanpham',$data);

			$param = $this->uri->segment(3);
				if($param == true){
					$this->model_mobi->admin_product_delete($param);
					redirect('/administrator/sanpham','refresh');					
				}

			$this->load->view('teamplates/admin_footer');
		}
		else
			{
				redirect('/homepage/index','refresh');
			}
	}

	public function updatesp()
	{
		$this->load->helper('url');
		if($this->session->userdata('quyen') == 1)
		{

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
					redirect('/administrator/sanpham','refresh');		
				}

			$this->load->view('teamplates/admin_footer');
		}
		else
			{
				redirect('/homepage/index','refresh');
			}
	}

	public function insertsp()
	{
		$this->load->helper('url');
		if($this->session->userdata('quyen') == 1)
		{
		
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
					
					redirect('/administrator/sanpham','refresh');		
				}
			$this->load->view('teamplates/admin_footer');
		}
		else
			{
				redirect('/homepage/index','refresh');
			}
	}

	public function tintuc()
	{
		$this->load->helper('url');
		if($this->session->userdata('quyen') == 1)
		{

			$this->load->view('teamplates/admin_header');

			$data['info'] = $this->model_mobi->admin_new();

			$this->load->view('admin/tintuc',$data);

			$param = $this->uri->segment(3);
				if($param == true){
					$this->model_mobi->admin_new_delete($param);
					redirect('/administrator/tintuc','refresh');					
				}


			$this->load->view('teamplates/admin_footer');
		}
		else
			{
				redirect('/homepage/index','refresh');
			}
	}

	public function updatett()
	{
		$this->load->helper('url');
		if($this->session->userdata('quyen') == 1)
		{

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
					redirect('/administrator/tintuc','refresh');		
				}

			$this->load->view('teamplates/admin_footer');
		}
		else
			{
				redirect('/homepage/index','refresh');
			}
	}

	public function inserttt()
	{
		$this->load->helper('url');
		if($this->session->userdata('quyen') == 1)
		{

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
				redirect('/administrator/tintuc','refresh');		
			}
			$this->load->view('teamplates/admin_footer');
		}
		else
			{
				redirect('/homepage/index','refresh');
			}
	}

	public function donhang()
	{

		$this->load->helper('url');
		if($this->session->userdata('quyen') == 1)
		{

			$this->load->view('teamplates/admin_header');

			$data['info'] = $this->model_mobi->admin_dh();

			$this->load->view('admin/donhang',$data);

			$param = $this->uri->segment(3);
				if($param == true){
					$this->model_mobi->admin_dh_delete($param);
					redirect('/administrator/donhang','refresh');					
				
				}

				if(isset($_POST['capnhattt']))
				{
					
					$paramtt = array(
						'tinhtrang' => $_POST['tinhtrang'],
						);
					$this->model_mobi->admin_dh_updatett($paramid, $paramtt);
					var_dump($paramid);die();
					
					redirect('/administrator/donhang','refresh');
				}
			

			$this->load->view('teamplates/admin_footer');
		}
		else
			{
				redirect('/homepage/index','refresh');
			}
	}

	public function updatedh()
	{
		
		$this->load->helper('url');
		if($this->session->userdata('quyen') == 1)
		{
			$param = $this->uri->segment(3);
			$this->load->view('teamplates/admin_header');

			$data['user'] = $this->model_mobi->admin_user();
			$data['product'] = $this->model_mobi->admin_product();
			$data['info'] = $this->model_mobi->admin_dh($param);

			$this->load->view('admin/suadonhang',$data);
			$this->load->view('teamplates/admin_footer');
		}
		else
			{
				redirect('/homepage/index','refresh');
			}
	}
}
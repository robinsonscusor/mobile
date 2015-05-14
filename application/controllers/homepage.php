
<?php 

class Homepage extends CI_Controller{
	
	public function __construct()
		{
			session_start();
			parent::__construct();
			$this->load->model('model_mobi');
		}

	// Trang Chu
	public function index()
	{
		
		$this->load->helper('url');
		$param = $this->uri->segment(3);
		
		$data['news'] = $this->model_mobi->home_news();
		$count = count($this->model_mobi->news_new());

		for($i = 1; $i <= $count; $i++ )
		{
			if($param == $i)
			{
				$data['product'] = $this->model_mobi->home_getproduct($param);
				break;
			}
			else
			{
				$data['product'] = $this->model_mobi->home_product();
			}
		}
		
		
		$this->load->view("teamplates/header");
		$this->load->view("home",$data);
		$this->load->view("teamplates/footer");
	}

	// Dang nhap
	public function login()
	{
		
		$this->load->helper('url');
		$this->load->view("teamplates/header");

		$data['news'] = $this->model_mobi->home_news();

		$this->load->view("taskbar/login",$data);
		if (!empty($_POST['dangnhap'])) {
			$taikhoan = array(
				'tendn' => $_POST['tentk'], 
				'matkhau' => $_POST['matkhau']
				);
			$datauser = $this->model_mobi->thanhvien_dangnhap($taikhoan);
			if ($datauser != null) {
				$_SESSION['thanhvien'] = $datauser['tentk'];
				echo "<script>window.location = '".base_url()."homepage/index'</script>";
			}else{
				echo "<script>alert('dang nhap that bai, vui long kiem tra lai tai khoan')</script>";
			}
			

		}
		$this->load->view("teamplates/footer");
	}

	//Dang Ki
	public function register()
		{
			$taikhoan = array();
			$this->load->helper('url');
			$this->load->view("teamplates/header");

			$data['news'] = $this->model_mobi->home_news();

			$this->load->view("taskbar/register",$data);
			if(!empty($_POST['submit'])){
				$taikhoan = array(
					'tentk' => $_POST['tentk'],
					'matkhau' => $_POST['matkhau'],
					'quyen' => 0,
					'dienthoai' => $_POST['dienthoai'],
					'diachi' => $_POST['diachi']
				 );
				if($this->model_mobi->thanhvien($taikhoan)==true){
					echo "<script>alert('Đăng kí thành công'); window.location='".base_url()."login/log';</script>";
				}else{
					echo "<script>alert('không thể thực hiện thao tác')</script>";
				}
			}
			$this->load->view("teamplates/footer");
		}

		// Tin Tuc
		public function news()
	{

		$this->load->helper('url');
		$this->load->view("teamplates/header");

		$data["new"] = $this->model_mobi->news_new();
		$data["newrd"] = $this->model_mobi->news_random();

		$this->load->view("news/news",$data);
		$this->load->view("teamplates/footer");
	}

	// San Pham
	public function products()
	{
		$this->load->helper('url');
		$param = $this->uri->segment(3);
		$data["products"] = $this->model_mobi->product_detail($param);
		$idloai = $this->uri->segment(4);
		$data['products_ca'] = $this->model_mobi->product_relate($idloai,$param);
		if (count($data["products"])==0 || count($data["products_ca"])==0) {
			header("Location:products");
		}
		$this->load->view("teamplates/header");
		$this->load->view("products/product",$data);
		$this->load->view("teamplates/footer");
	}

	// Tin Chi Tiet
	public function details()
	{
		$this->load->helper('url');
		$param = $this->uri->segment(3);
		$data["newca"] = $this->model_mobi->details_newca($param);
		$data["news"] = $this->model_mobi->details_detail($param);
		if (count($data["news"])==0) {
			header("Location:home");
		}
		$this->load->view("teamplates/header");
		$this->load->view("details/detail",$data);
		$this->load->view("teamplates/footer");
	}

	//Trang tim kiem
	public function search()
	{
		
		$this->load->helper('url');
		$this->load->view('teamplates/header');
		

		$param = array(
			'keyword' => $_GET['keyword']
			);
		$data["products"] = $this->model_mobi->search_tk($param);
		$this->load->view('taskbar/search',$data);
		$this->load->view("teamplates/footer");
	}

	//trang thong tin tai khoan
	public function information()
	{
		
		$this->load->helper('url');

		$data['news'] = $this->model_mobi->home_news();

		$this->load->view('teamplates/header');
		$this->load->view('taskbar/thongtintk',$data);
		$this->load->view('teamplates/footer');
	}

}
?>
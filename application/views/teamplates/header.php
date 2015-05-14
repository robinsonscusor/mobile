	
	<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>SHOP MOBILE</title>
		<link rel="stylesheet" href="<?php echo base_url();?>application/bootstrap-3.3.4-dist/css/bootstrap.min.css" type="text/css">
		<link rel="stylesheet" href="<?php echo base_url();?>application/font-awesome-4.3.0/css/font-awesome.min.css" type="text/css">
		<link rel="stylesheet" href="<?php echo base_url();?>application/css/style.css" type="text/css">
		<script type="text/javascript" src="<?php echo base_url();?>application/js/jquery-1.11.2.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>application/js/myjs.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>application/bootstrap-3.3.4-dist/js/bootstrap.min.js"></script>

	</style>
	</head>
	<body>
		<!--header-->
			

		
		
	<div class="taskbar">
				<div class="container">
					<div class="row">

						<!--icoin mang xa hoi-->
						<div class="col-md-5 col-sm-5 col-xs-5">
							<a href="<?php echo base_url();?>homepage/index"><i class="fa fa-home fa-2x"></i></a>
							<a href="https://www.facebook.com/?_rdr"><i class="fa fa-facebook-square fa-2x"></i></a>
							<a href="https://twitter.com/"><i class="fa fa-twitter-square fa-2x"></i></a>
							<a href="https://accounts.google.com/"><i class="fa fa-google-plus-square fa-2x"></i></a>
							<a href="https://www.rss.com"><i class="fa fa-rss fa-2x"></i></a>
							<a href="<?php echo base_url();?>homepage/index/1"><i class="fa fa-apple fa-2x"></i></a>
							<a href="<?php echo base_url();?>homepage/index/2"><i class="fa fa-android fa-2x"></i></a>
							<a href="<?php echo base_url();?>homepage/index/3"><i class="fa fa-windows fa-2x"></i></a>
						</div>
						<!--end icoin mang xa hoi-->

						<!--dang ki va dang nhap-->
						<div class="col-md-7 col-sm-7 col-xs-7">
							<?php if(empty($_SESSION["thanhvien"])): ?>
								<div class="log">
									<a href="<?php echo base_url();?>homepage/register">Đăng Kí</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="<?php echo base_url();?>homepage/login">Đăng Nhập</a>
								</div>
							<?php else:?>
								<div class="log" style=" color: white; ">
									Chào bạn, <a href="<?php echo base_url(); ?>homepage/information/<?php echo $_SESSION["thanhvien"]; ?>"><?php echo $_SESSION["thanhvien"]; ?></a>  <a href="<?php echo base_url(); ?>homepage/index" onlick="huysession()">Đăng Xuất</a>
								</div>
									<?php endif; ?>
							<form action="<?php echo base_url();?>homepage/search" class="search" onsubmit="return validateSearch();">
								<input type="text" name="keyword" id="keyword" placeholder="Tìm Kiếm" >
								<button>
									<i class="fa fa-search fa-1x"></i>
								</button>
							</form>
						</div>
						<!--end dang ki va dang nhap-->

					</div>
				</div>
			</div>
			<!--end header-->
			<script type="text/javascript">
			//function huysession(){
				//"<?php unset($_SESSION['thanhvien']); ?>";
			//}
			</script>
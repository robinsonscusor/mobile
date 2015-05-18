

			
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-sm-8 col-xs-8 slide">
						<!--slide-->
						<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
							  <!-- Indicators -->
							  <ol class="carousel-indicators">
								    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
								    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
								    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
							  </ol>
							 
							  <!-- Wrapper for slides -->
							  <div class="carousel-inner">
							    <div class="item active">
								      <img src="<?php echo base_url(); ?>application/images/slide1.jpg" >
								      <div class="carousel-caption">
								         
								      </div>
							    </div>
							    <div class="item">
								      <img src="<?php echo base_url(); ?>application/images/slide2.jpg">
								      <div class="carousel-caption">
								          
								      </div>
							    </div>
							    <div class="item">
								      <img src="<?php echo base_url(); ?>application/images/slide3.jpg">
								      <div class="carousel-caption">
								         
								      </div>
							    </div>
							  </div>
							 
							  <!-- Controls -->
							  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
							    	<span class="glyphicon glyphicon-chevron-left"></span>
							  </a>
							  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
							    	<span class="glyphicon glyphicon-chevron-right"></span>
							  </a>
						</div> <!-- Carousel -->
						<!--end slide-->
					</div>

					<div class="col-md-4 col-sm-4 col-xs-4">
						<div class="title">	<a href="<?php echo base_url();?>homepage/news"><h3>Tin Công NGHỆ</h3></a></div>
						<!--news-->
							<?php foreach ($news as $value ): ?>
								
							
								<div class="row news">
									<div class="col-md-8 col-sm-8 col-xs-8">
										<a href="<?php echo base_url(); ?>homepage/details/<?php echo $value['id']; ?>"><?php echo $value["tieude"] ?></a>
									</div>
									<div class="col-md-4 col-md-4 col-xs-8 ">
										<img src="<?php echo base_url(); ?>application/images/<?php echo $value["hinh"] ?>">
									</div>
								</div>
							<?php endforeach; ?>

							
						<!--end news-->

					</div>

				</div> 
			</div>
			


		

		<!--content-->
			<div class="container ">
				
					<div class="row " >
						<table class="table table-hover tttk">
							<tr>
								<td colspan="2" >Thông Tin Tài Khoản</td>
							</tr>

							<tr>
								<td>Tên Tài Khoản</td>
								<td><?php echo $info['tentk']; ?></td>
							</tr>

							<tr>
								<td>Mật Khẩu</td>
								<td>***********</td>
								<td>
									<button>
										<a href="<?php echo base_url();?>homepage/change_password/<?php echo $info['tentk']; ?>">Đổi Mật Khẩu</a>
									</button>
								</td>
							</tr>

							<tr>
								<td>Điện Thoại</td>
								<td><?php echo $info['dienthoai']; ?></td>
							</tr>

							<tr>
								<td>Địa Chỉ</td>
								<td><?php echo $info['diachi']; ?></td>
							</tr>
						</table>

						<table class="table table-hover tttk">

							<tr>
								<td colspan="2">Đơn Hàng Đã Đặt</td>
							</tr>

							<tr>
								<td>Mã Đơn Hàng</td>
								<td>Tài Khoản</td>
								<td>Tên Sản Phẩm</td>
								<td>Thành Tiền</td>
							</tr>

							<?php foreach ($purchase as $value) : ?>
							<tr>
								<td><?php echo $value['id']; ?></td>
								<td><?php echo $value['tentk']; ?></td>
								<td><?php echo $value['masp']; ?></td>
								<td><?php echo $value['thanhtien']; ?> đ</td>
							</tr>

							<?php endforeach; ?>

						</table>
					</div>
				
			</div>
		<!--end content-->

		
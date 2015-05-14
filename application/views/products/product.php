      			



			
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-sm-8 col-xs-8 products">
						<h3>Thông Số Kỹ Thuật <?php echo $products['tendienthoai'] ?></h3>
						<img src="<?php echo base_url(); ?>application/images/<?php echo $products['hinh'] ?>">
						<table>
							<tr>
								<td width="200">Màn hình :</td>
								<td><?php echo $products['manhinh'] ?></td>
							</tr>

							<tr>
								<td>CPU :</td>
								<td><?php echo $products['cpu'] ?></td>
							</tr>

							<tr>
								<td>RAM :</td>
								<td><?php echo $products['ram'] ?></td>
							</tr>

							<tr>
								<td>Hệ Điều Hành :</td>
								<td><?php echo $products['hedieuhanh'] ?></td>
							</tr>

							<tr>
								<td>Camera Chính :</td>
								<td><?php echo $products['camerachinh'] ?></td>
							</tr>

							<tr>
								<td>Camera Phụ :</td>
								<td><?php echo $products['cameraphu'] ?></td>
							</tr>

							<tr>
								<td>Bộ Nhớ Trong :</td>
								<td><?php echo $products['bonhotrong'] ?></td>
							</tr>

							<tr>
								<td>Thẻ Nhớ Ngoài :</td>
								<td><?php echo $products['thenhongoai'] ?></td>
							</tr>

							<tr>
								<td>Dung Lượng Pin :</td>
								<td><?php echo $products['pin'] ?></td>
							</tr>
							
							<tr>		
								<td>			
									<button class="btn">
										<img src="<?php echo base_url(); ?>application/images/dathang.png">
									</button>
								</td>
								<td><h3><?php echo $products['gia'] ?> VND</h3></td>
							</tr>
						</table>

					</div>

					<div class="col-md-4 col-sm-4 col-xs-4">
						<div class="title">	<a href="<?php echo base_url();?>homepage/index"><h3>Sản phẩm cùng loại</h3></a></div>
						<!--news-->
						<?php foreach ($products_ca as $value): ?>
							<div class="row news">
								<div class="col-md-8 col-sm-8 col-xs-8">
									<a href="<?php echo base_url(); ?>homepage/products/<?php echo $value['id'] ?>/<?php echo $value['idLoai'] ?>"><?php echo $value['tendienthoai'] ?></a>
								</div>
								<div class="col-md-4 col-md-4 col-xs-8 ">
									<img src="<?php echo base_url(); ?>application/images/<?php echo $value['hinh'] ?>">
								</div>
							</div>
						<?php endforeach; ?>
						<!--end news-->

					</div>

				</div> 
			</div>
			


		

		<!--content-->
			
		<!--end content-->


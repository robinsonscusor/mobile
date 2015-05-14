



<div class="container ">
					<div class="row srh">
						<h4> Bạn Tìm thấy <?php echo count($products)  ?> kết quả</h4>
					</div>

					<div class="row " >
							<?php foreach ($products as  $value) :?>      
						
							<div class="col-md-2 col-sm-2 col-xs-2 product">
										<div class="ttpr"><a href="<?php echo base_url(); ?>homepage/products/<?php echo $value['id'].'/'.$value['idLoai'] ?>"><h5><?php echo $value["tendienthoai"] ?></h5></a></div>
									<a href="<?php echo base_url(); ?>homepage/products/<?php echo $value['id'].'/'.$value['idLoai'] ?>"><img src="<?php echo base_url(); ?>application/images/<?php echo $value["hinh"] ?>"><a>
									<p>Giá : <?php echo $value["gia"] ?>đ</p>
							</div>

						  <?php endforeach; ?>   
					</div>
				
			</div>
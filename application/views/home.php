

			
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
						<?php foreach ($product as  $value) :?>
						
						<div class="col-md-2 col-sm-2 col-xs-2 product">
									<div class="ttpr"><a href="<?php echo base_url(); ?>homepage/products/<?php echo $value['id'].'/'.$value['idLoai'] ?>"><h5><?php echo $value["tendienthoai"] ?></h5></a></div>
								<a href="<?php echo base_url(); ?>homepage/products/<?php echo $value['id'].'/'.$value['idLoai'] ?>"><img src="<?php echo base_url(); ?>application/images/<?php echo $value["hinh"] ?>"><a>
								<p>Giá : <?php echo $value["gia"] ?> đ</p>
						</div>

						<?php endforeach; ?>
					</div>
				
			</div>
		<!--end content-->

		
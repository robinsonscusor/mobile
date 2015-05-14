

			
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-sm-8 col-xs-8 detail">
						<h3><?php echo $news['tieude']; ?></h3>
						<b><p><?php echo $news['tomtat']; ?></p></b>
						<img src="<?php echo base_url(); ?>application/images/<?php echo $news['hinh']; ?>">
						<p><?php echo $news['noidung']; ?>.</p>
					</div>

					<div class="col-md-4 col-sm-4 col-xs-4">
						<div class="title">	<a href="<?php echo base_url();?>homepage/news"><h3>Tin Liên Quan</h3></a></div>
						<!--news-->
							<?php foreach ($newca as $value) : ?>
								<div class="row news">
									<div class="col-md-8 col-sm-8 col-xs-8">
										<a href="<?php echo base_url(); ?>homepage/details/<?php echo  $value["id"] ?>"><?php echo $value["tieude"] ?></a>
									</div>
									<div class="col-md-4 col-md-4 col-xs-8 ">
										<img src="<?php echo base_url(); ?>application/images/<?php echo $value["hinh"]; ?>">
									</div>
								</div>

							<?php endforeach; ?>							
						<!--end news-->

					</div>

				</div> 
			</div>
			


		

		<!--content-->
			
		<!--end content-->

		
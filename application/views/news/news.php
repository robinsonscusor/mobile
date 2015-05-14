

			
			
		<!--content-->
			
			<div class="container">
				<div class="row ">

					<div class="col-md-8 col-sm-8 col-xs-8 news">
						<div class="title"><h3>Tin Công Nghệ</h3></div>

						<?php foreach ($new as $value) : ?>
							
						

							<div class="row new">
								<a href="<?php echo base_url(); ?>homepage/details/<?php echo $value['id']; ?>"><h4><?php echo $value["tieude"] ?></h4></a>

								<div class="col-md-4 col-sm-4 col-xs-4">
									<a href="<?php echo base_url(); ?>homepage/details/<?php echo $value['id']; ?>"><img src="<?php echo base_url(); ?>application/images/<?php echo $value["hinh"] ?>"></a>
								</div>

								<div class="col-md-8 col-sm-8 col-xs-8">
									<p><?php echo $value["tomtat"]; ?>.</p>
								</div>
							</div>

						<?php endforeach ?>

					</div>

					

					<div class="col-md-4 col-sm-4 col-xs-4 news">
						<div class="title">	<h3>Tin Cũ</h3></div>
						<ul>
						<?php for($i = 0 ; $i < 8 ; $i++) : ?>
							<a href="<?php echo base_url(); ?>homepage/details/<?php echo $newrd[$i]["id"] ?>"><li><?php echo $newrd[$i]["tieude"] ?></li></a>
							<?php endfor; ?>
						</ul>
					</div>

				</div>
			</div>
		<!--end content-->

		
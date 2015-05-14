



<div class="container">
	<div class="row">
		<div class="col-md-3 col-sm-3 col-xs-3 atitle">
			<ul>
				<a href="<?php echo base_url(); ?>administrator"><li>Tài Khoản </li></a>
				<a href="<?php echo base_url(); ?>administrator/sanpham"><li>Sản Phẩm </li></a>
				<a href="<?php echo base_url(); ?>administrator/tintuc"><li>Tin Tức </li></a>
				
				<a href="<?php echo base_url(); ?>administrator/donhang"><li>Đơn Hàng </li></a>
			</ul>
		</div>

		<div class="col-md-9 col-sm-9 col-xs">
			<div class="row">
				<form method="post">
					<table class="table table-hover tk" >
						<tr>
							<td align="center" colspan="2" ><h4>Quản Lý Tin Tức</h4></td>
						</tr>
						<tr>
							<td colspan="2">
								<button>
									<a href="<?php echo base_url(); ?>administrator/inserttt"> Thêm Tin Tức</a>
								</button>
							</td>
						</tr>
						<tr>
							<td>ID</td>
							<td>Tiêu Đề</td>
							<td>Nội Dung Tóm Tắt</td>
							<td>Hình</td>
						</tr>

						<?php foreach ($info as $value) : ?>
						<tr>
							<td><?php echo $value['id'] ?></td>
							<td><a href="<?php echo  base_url().'administrator/updatett/'.$value['id'] ?>"><?php echo $value['tieude'] ?></a></td>	
							<td><?php echo $value['tomtat'] ?></td>
							<td class="hasp"><img src="<?php echo base_url(); ?>application/images/<?php echo $value['hinh'] ?>"></td>
							
							<td>
	 							<td><a  href="<?php echo  base_url().'administrator/tintuc/'.$value['id'] ?>"><img style="width:20px;" src="<?php echo base_url(); ?>application/images/xoa.jpg" onclick="return validateDelete();"></a></td>
							</td>
						</tr>

						<?php endforeach; ?>

					</table>
				</form>
			</div>
		</div>
	</div>
</div>




<div class="container">
	<div class="row">
		<div class="col-md-3 col-sm-3 col-xs-3 atitle">
			<ul>
				<a href="<?php echo base_url(); ?>administrator/index"><li>Tài Khoản </li></a>
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
							<td align="center" colspan="2" ><h4>Quản Lý Sản Phẩm</h4></td>
						</tr>
						<tr>
							<td >
								<button>
									<a href="<?php echo base_url(); ?>administrator/insertsp"> Thêm Sản Phẩm</a>
								</button>
							</td>
						</tr>
						<tr>
							<td>ID</td>
							<td>Tên Điện Thoại</td>
							<td>Giá</td>
							<td>Hình</td>
							<td>Id Loại</td>
						</tr>

						<?php foreach ($info as $value) : ?>

						<tr>
							<td><?php echo $value["id"]; ?></td>
							<td><?php echo $value["tendienthoai"]; ?></a></td>
							
							<td><?php echo $value["gia"]; ?></td>
							<td class="hasp"><img src="<?php echo base_url(); ?>application/images/<?php echo $value["hinh"]; ?>"></td>
							<td><?php echo $value["idLoai"] ?></td>

							<td>
	 							<a  href="<?php echo  base_url().'administrator/updatesp/'.$value['id'] ?>"><img style="width:20px;" src="<?php echo base_url(); ?>application/images/edit.png" ></a>
	 						</td>

							
							<td>
								<a  href="<?php echo  base_url().'administrator/sanpham/'.$value['id'] ?>"><img style="width:20px;" src="<?php echo base_url(); ?>application/images/xoa.jpg" onclick="return validateDelete();"></a>
							</td>
							
						</tr>

						<?php endforeach; ?>

					</table>
				</form>
			</div>
		</div>
	</div>
</div>
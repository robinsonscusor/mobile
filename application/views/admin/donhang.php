



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
							<td align="center" colspan="3" ><h4>Quản Lý Đơn Hàng</h4></td>
						</tr>
						<tr>
							<td>ID</td>
							<td>Tên Tài Khoản</td>
							<td>ID Sản Phẩm</td>
							<td>Đơn Giá</td>
							<td>Số Lượng</td>
							<td>Thành Tiền</td>
							<td>Tình Trạng</td>
							
						</tr>

						<?php foreach ($info as $value) : ?>
						<tr>
							<td><?php echo $value['id'] ?></td>
							<td><?php echo $value['tentk'] ?></td>
							<td><?php echo $value['masp'] ?></td>
							<td><?php echo $value['gia'] ?></td>
							<td><?php echo $value['soluong'] ?></td>
							<td><?php echo $value['thanhtien'] ?></td>

							<td>
								<select name="tinhtrang">
									<?php if($value['tinhtrang'] == 'chuagui') : ?>
										<option value="chuagui" selected>Chưa gửi hàng</option>
										<option value="dagui">Đã gửi hàng</option>

									<?php elseif($value['tinhtrang'] == 'dagui') : ?>
										<option value="chuagui" >Chưa gửi hàng</option>
										<option value="dagui" selected>Đã gửi hàng</option>

									<?php else : ?>	
										<option value="chuagui">Chưa gửi hàng</option>
										<option value="dagui">Đã gửi hàng</option>

									<?php endif; ?>

								</select>
							</td>

							<td>
	 							<a  href="<?php echo  base_url().'administrator/updatedh/'.$value['id'] ?>"><img style="width:20px;" src="<?php echo base_url(); ?>application/images/edit.png" ></a>
	 						</td>

	 						<td>
	 							<input type="submit" name="capnhattt" value="Cập Nhật">
	 						</td>
							
							<td>
	 							<a  href="<?php echo  base_url().'administrator/donhang/'.$value['id'] ?>"><img style="width:20px;" src="<?php echo base_url(); ?>application/images/xoa.jpg" onclick="return validateDelete();"></a>
	 						</td>
						</tr>
					<?php endforeach; ?>

					</table>
				</form>
			</div>
		</div>
	</div>
</div>
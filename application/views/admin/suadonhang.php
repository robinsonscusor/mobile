



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
							<td align="center" colspan="2" ><h4>Sửa Đơn Hàng</h4></td>
						</tr>
						<tr>
							<td>ID</td>
							<td><?php echo $info['id'] ?></td>
						</tr>

						<tr>
							<td>Tên Tài Khoản</td>	
							<td>
								<select>
									<?php foreach ($user as $value) : ?>
										<?php if($info['tentk'] == $value['tentk']) : ?>
											<option value="<?php echo $value['tentk'] ?>" selected><?php echo $value['tentk'] ?></option>
										<?php else : ?>
											<option value="<?php echo $value['tentk'] ?>" ><?php echo $value['tentk'] ?></option>
									<?php endif; endforeach; ?>
								</select>
							</td>
						</tr>

						<tr>
							<td>ID Sản Phẩm</td>
							<td>
								<select>
									<?php foreach ($product as $valuepr) : ?>
										<?php if($info['masp'] == $valuepr['id']) : ?>
											<option value="<?php echo $valuepr['id'] ?>" selected><?php echo $valuepr['tendienthoai'] ?></option>
										<?php else : ?>
											<option value="<?php echo $valuepr['id'] ?>" ><?php echo $valuepr['tendienthoai'] ?></option>
									<?php endif; endforeach; ?>
								</select>
							</td>
						</tr>

						<tr>
							<td>Đơn Giá</td>
							<td><input type="text" name="dongia" readonly="readonly" value="<?php echo $info['gia'] ?>"></td>
						</tr>

						<tr>
							<td>Số Lượng</td>
							<td><input type="text" name="gia" value="<?php echo $info['soluong'] ?>"></td>
						</tr>

						<tr>
							<td align="center" colspan="2"><input type="submit" name="suadh" value="Đồng Ý"></td>
						</tr>

					</table>
				</form
			</div>
		</div>
	</div>
</div>
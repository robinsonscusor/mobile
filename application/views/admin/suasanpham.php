



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
							<td align="center" colspan="2" ><h4>Sửa Sản Phẩm</h4></td>
						</tr>
						<tr>
							<td>ID</td>
							<td><?php echo $info["id"]; ?></td>
						</tr>

						<tr>
							<td>Tên Điện Thoại</td>	
							<td><input type="text" name="dienthoai" value="<?php echo $info['tendienthoai'] ?>"></td>
						</tr>

						<tr>
							<td>Giá</td>
							<td><input type="text" name="gia" value="<?php echo $info['gia'] ?>"></td>
						</tr>

						<tr>
							<td>Hình</td>
							<td><input type="file" name="hinh" ></td>
						</tr>

						<tr>
							<td>Id Loại</td>
							<td>
								<select name="loai">
									<?php foreach ($ca as  $value1) : 
									if($info["idLoai"] == $value1["id"]) : ?>	
										<option value="<?php echo $value1["id"]; ?>" selected><?php echo $value1["ten"]; ?></option>
									<?php else : ?>
										<option value="<?php echo $value1["id"]; ?>" ><?php echo $value1["ten"]; ?></option>
									<?php  endif; endforeach; ?>
								</select>
							</td>
						</tr>

						<tr>
							<td>Màn Hình</td>
							<td><input type="text" name="manhinh" value="<?php echo $info['manhinh'] ?>"></td>
						</tr>

						<tr>
							<td>CPU</td>
							<td><input type="text" name="cpu" value="<?php echo $info['cpu'] ?>"></td>
						</tr>

						<tr>
							<td>Ram</td>
							<td><input type="text" name="ram" value="<?php echo $info['ram'] ?>"></td>
						</tr>

						<tr>
							<td>Hệ Điều Hành</td>
							<td><input type="text" name="hedieuhanh" value="<?php echo $info['hedieuhanh'] ?>"></td>
						</tr>

						<tr>
							<td>Camera Chính</td>
							<td><input type="text" name="camerachinh" value="<?php echo $info['camerachinh'] ?>"></td>
						</tr>

						<tr>
							<td>Camera Phụ</td>
							<td><input type="text" name="cameraphu" value="<?php echo $info['cameraphu'] ?>"></td>
						</tr>

						<tr>
							<td>Bộ Nhớ Trong</td>
							<td><input type="text" name="bonhotrong" value="<?php echo $info['bonhotrong'] ?>"></td>
						</tr>

						<tr>
							<td>Thẻ Nhớ Ngoài</td>
							<td><input type="text" name="thenhongoai" value="<?php echo $info['thenhongoai'] ?>"></td>
						</tr>

						<tr>
							<td>Pin</td>
							<td><input type="text" name="pin" value="<?php echo $info['pin'] ?>"></td>
						</tr>

						<tr>

						<tr>
							<td align="center" colspan="2"><input type="submit" name="suasp" value="Đồng Ý"></td>
						</tr>

					</table>
				</form>
			</div>
		</div>
	</div>
</div>
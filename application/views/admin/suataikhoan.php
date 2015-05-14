



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
							<td align="center" colspan="2" ><h4>Sửa Tài Khoản</h4></td>
						</tr>
						<tr>
						<td>Tài Khoản</td>
						<td><?php echo $info['tentk'] ?></td>
						</tr>

						<tr>
							<td>Mật khẩu</td>	
							<td><input type="text" name="matkhau" value="<?php echo $info['matkhau'] ?>"></td>
						</tr>

						<tr>
							<td>Quyền</td>
							<td><input type="text" name="quyen" value="<?php echo $info['quyen'] ?>"></td>
						</tr>

						<tr>
							<td>Điện Thoại</td>
							<td><input type="text" name="dienthoai" value="<?php echo $info['dienthoai'] ?>"></td>
						</tr>

						<tr>
							<td>Địa Chỉ</td>
							<td><textarea row=2 name="diachi"> <?php echo $info['diachi'] ?></textarea></td>
						</tr>

						<tr>
							<td><input type="submit" name="suatk" value="Đồng Ý"></td>
						</tr>
					</table>
				</form
			</div>
		</div>
	</div>
</div>
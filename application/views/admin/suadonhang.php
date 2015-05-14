



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
							<td>id</td>
						</tr>

						<tr>
							<td>Tên Tài Khoản</td>	
							<td><input type="text" name="taikhoan"></td>
						</tr>

						<tr>
							<td>ID Sản Phẩm</td>
							<td><input type="text" name="idsp"></td>
						</tr>

						<tr>
							<td>Thành Tiền</td>
							<td><input type="text" name="thanhtien"></td>
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
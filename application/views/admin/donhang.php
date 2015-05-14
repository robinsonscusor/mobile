



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
							<td align="center" colspan="2" ><h4>Quản Lý Đơn Hàng</h4></td>
						</tr>
						<tr>
							<td>ID</td>
							<td>Tên Tài Khoản</td>
							<td>ID Sản Phẩm</td>
							<td>Thành Tiền</td>
							
						</tr>

						<tr>
							<td>id</td>
							<td><a href="#">taikhoan</a></td>
							<td>idsanpham</td>
							<td>thanhtien</td>
							
							<td>
								<button class="btnxoa">
									<img src="<?php echo base_url(); ?>application/images/xoa.jpg">
								</button>
							</td>
						</tr>

					</table>
				</form>
			</div>
		</div>
	</div>
</div>
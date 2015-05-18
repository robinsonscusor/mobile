



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
							<td align="center" colspan="2" ><h4>Quản Lý Tài Khoản</h4></td>
						</tr>
						<tr>
							<td>Tài Khoản</td>
							<td>Mật Khẩu</td>
							<td>Quyền</td>
							<td>Điện Thoại</td>
							<td>Địa Chỉ</td>
						</tr>
						
					<?php foreach ($info as $value): ?>
						<tr>
							<td><?php echo $value['tentk'] ?></td>
							<td><?php echo $value['matkhau'] ?></td>
							<td><?php echo $value['quyen'] ?></td>
							<td><?php echo $value['dienthoai'] ?></td>
							<td> <?php echo $value['diachi'] ?></td>
							
							
	 						<td>
	 							<a  href="<?php echo  base_url().'administrator/updatetk/'.$value['tentk'] ?>"><img style="width:20px;" src="<?php echo base_url(); ?>application/images/edit.png" ></a>
	 						</td>
							

							
	 						<td>
	 							<a  href="<?php echo  base_url().'administrator/index/'.$value['tentk'] ?>"><img style="width:20px;" src="<?php echo base_url(); ?>application/images/xoa.jpg" onclick="return validateDelete();"></a>
	 						</td>
							
						</tr>
					<?php endforeach; ?>
					</table>
				</form>
			</div>
		</div>
	</div>
</div>
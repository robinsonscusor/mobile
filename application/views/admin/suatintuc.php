



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
							<td align="center" colspan="2" ><h4>Sửa Tin Tức</h4></td>
						</tr>
						<tr>
							<td>ID</td>
							<td><?php echo $info['id'] ?></td>
						</tr>

						<tr>
							<td>Tiêu Đề</td>	
							<td><input type="text" name="tieude" value="<?php echo $info['tieude']; ?>"></td>
						</tr>

						<tr>
							<td>Nội Dung Tóm Tắt</td>
							<td><textarea rows="5" name="tomtat" cols="40" ><?php echo $info['tomtat'] ?></textarea></td>
						</tr>

						<tr>
							<td>Nội Dung</td>
							<td><textarea rows="20" name="noidung" cols="40" ><?php echo $info['noidung'] ?></textarea></td>
						</tr>

						<tr>
							<td>Hình</td>
							<td><input type="file" name="hinh"></td>
						</tr>

						<tr>
							<td align="center" colspan="2"><input type="submit" name="suatt" value="Đồng Ý"></td>
						</tr>

					</table>
				</form>
			</div>
		</div>
	</div>
</div>
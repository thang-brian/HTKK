
<fieldset>
	<legend>Thêm mới</legend>
	<table border="1" width="100%" style="border-collapse: collapse;">
 <form method="POST" action="modules/quanlybg-vc/xuly.php" enctype="multipart/form-data">
	   <tr>
	  	<td>Hình ảnh</td>
	  	<td><input type="file" name="hinhanh" required="required"></td>
	  </tr>
	  <tr>
	  	<td>Quốc gia</td>
		<td>
			<select name="nation">
	    		<option value="Hoa Kỳ">Hoa Kỳ</option>
	    		<option value="Trung Quốc">Trung Quốc</option>
				<option value="Nhật Bản">Nhật Bản</option>
				<option value="Hàn Quốc">Hàn Quốc</option>
	    	</select>
		</td>
	  </tr>
	   <tr>
	  	<td>Nội dung</td>
	  	<td><textarea rows="10"  name="noidung" style="resize: none" required="required"></textarea></td>
	  </tr>
	  <tr>
	  	<td>Nội dung Tiếng Anh</td>
	  	<td><textarea rows="10"  name="nd_en" style="resize: none" required="required"></textarea></td>
	  </tr>
	  <tr>
	  	<td>Mô tả</td>
	  	<td><textarea rows="10"  name="mota" style="resize: none" required="required"></textarea></td>
	  </tr>
	  <tr>
	  	<td>Mô tả tiếng Anh</td>
	  	<td><textarea rows="10"  name="mota_en" style="resize: none" required="required"></textarea></td>
	  </tr>
	  <tr>
	    <td>Trạng thái</td>
	    <td>
	    	<select name="tinhtrang">
	    		<option value="1">Kích hoạt</option>
	    		<option value="0">Ẩn</option>
	    	</select>
	    </td>
	  </tr>
	   <tr>
	    <td colspan="2"><input type="submit" name="themdv" value="Thêm dịch vụ" class="btn btn-primary"></td>
	  </tr>
 </form>
</table>
</fieldset>
<a href="?action=quanlybgvc&query=lietke" class="btn btn-danger">
	Thoát
</a>
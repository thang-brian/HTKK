
<fieldset>
	<legend>Thêm logo</legend>
	<table border="1" width="100%" style="border-collapse: collapse;">
 <form method="POST" action="modules/quanlylogo/xuly.php" enctype="multipart/form-data">
	   <tr>
	  	<td>Hình ảnh</td>
	  	<td><input type="file" name="hinhanh" required="required"></td>
	  </tr>
	  <tr>
	    <td>Kiểu</td>
	    <td>
	    	<select name="kieu">
	    		<option value="1">Nền xanh</option>
	    		<option value="0">Nền trắng</option>
	    	</select>
	    </td>
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
	    <td colspan="2"><input type="submit" name="themlogo" value="Thêm logo" ></td>
	  </tr>
 </form>
</table>
</fieldset>
<a href="?action=quanlylogo&query=lietke" class="btn btn-danger">
	Thoát
</a>
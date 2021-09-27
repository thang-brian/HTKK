
<fieldset>
	<legend>Thêm Đối tác</legend>
	<table border="1" width="100%" style="border-collapse: collapse;">
 <form method="POST" action="modules/quanlydt/xuly.php" enctype="multipart/form-data">
	   <tr>
	  	<td>Hình ảnh</td>
	  	<td><input type="file" name="hinhanh" required="required"></td>
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
	    <td colspan="2"><input type="submit" name="themdt" value="Thêm Đối tác" class="btn btn-primary"></td>
	  </tr>
 </form>
</table>
</fieldset>
<a href="?action=quanlydt&query=lietke" class="btn btn-danger">
	Thoát
</a>
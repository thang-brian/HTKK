
<fieldset>
	<legend>Thêm Nội dung</legend>
	<table border="1" width="100%" style="border-collapse: collapse;">
 <form method="POST" action="modules/quanlynd/xuly.php" enctype="multipart/form-data">
	   <tr>
	  	<td>Nội dung Tiếng Việt</td>
	  	<td><textarea rows="10"  name="noidung" style="resize: none" required="required"></textarea></td>
	  </tr>
	  <tr>
	  	<td>Nội dung Tiếng Anh</td>
	  	<td><textarea rows="10"  name="nd_en" style="resize: none" required="required"></textarea></td>
	  </tr>
	  <tr>
	    <td>Loại nội dung</td>
	    <td>
	    	<select name="tinhtrang">
	    		<option value="tintuc">Tin Tức</option>
	    		<option value="ykien">Ý kiến khách hàng</option>
				<option value="vbpl">Văn bản pháp luật</option>
	    	</select>
	    </td>
	  </tr>
	   <tr>
	    <td colspan="2"><input type="submit" name="themnd" value="Thêm nội dung" ></td>
	  </tr>
 </form>
</table>
</fieldset>
<a href="?action=quanlynd&query=lietke" class="btn btn-danger">
	Thoát
</a>
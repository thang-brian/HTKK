<?php
	$sql_sua_dv = "SELECT * FROM anh WHERE style ='bgvanchuyen' and id='$_GET[id]' LIMIT 1";
	$query_sua_dv = mysqli_query($mysqli,$sql_sua_dv);
?>
<h3>Sửa</h3>
<table border="1" width="100%" style="border-collapse: collapse;">
<?php
while($row = mysqli_fetch_array($query_sua_dv)) {
?>
 <form method="POST" action="modules/quanlybg-vc/xuly.php?id=<?php echo $row['id'] ?>" enctype="multipart/form-data">
	   <tr>
	  	<td>Hình ảnh</td>
	  	<td>
	  		<input type="file" name="hinhanh">
	  		<img src="modules/quanlybg-vc/uploads/<?php echo $row['hinhanh'] ?>" width="150px">
	  	</td>
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
	  	<td><textarea rows="10"  name="noidung" style="resize: none"><?php echo  $row['nd_vi'] ?></textarea></td>
	  </tr>
	   <tr>
	  	<td>Nội dung Tiếng Anh</td>
	  	<td><textarea rows="10"  name="nd_en" style="resize: none"><?php echo  $row['nd_en'] ?></textarea></td>
	  </tr>
	  <tr>
	  	<td>Mô tả</td>
	  	<td><textarea rows="10"  name="mota" style="resize: none" ><?php echo  $row['mota_vi'] ?></textarea></td>
	  </tr>
	  <tr>
	  	<td>Mô tả tiếng Anh</td>
	  	<td><textarea rows="10"  name="mota_en" style="resize: none" ><?php echo  $row['mota_en'] ?></textarea></td>
	  </tr>
	  <tr>
	    <td>Tình trạng</td>
	    <td>
	    	<select name="tinhtrang">
	    		<?php
	    		if($row['tinhtrang']==1){ 
	    		?>
	    		<option value="1" selected>Kích hoạt</option>
	    		<option value="0">Ẩn</option>
	    		<?php
	    		}else{ 
	    		?>
	    		<option value="1">Kích hoạt</option>
	    		<option value="0" selected>Ẩn</option>
	    		<?php
	    		} 
	    		?>

	    	</select>
	    </td>
	  </tr>
	   <tr>
	    <td colspan="2"><input type="submit" name="suadv" value="Sửa dịch vụ"></td>
	  </tr>
 </form>
 <?php
 } 
 ?>

</table>
<a href="?action=quanlybgvc&query=lietke" class="btn btn-danger" >
	Thoát
</a>
<?php
	$sql_sua = "SELECT * FROM anh WHERE id='$_GET[id]'";
	$query_sua = mysqli_query($mysqli,$sql_sua);
?>
<h3>Sửa Đối tác</h3>
<table border="1" width="100%" style="border-collapse: collapse;">
<?php
while($row = mysqli_fetch_array($query_sua)) {
?>
 <form method="POST" action="modules/quanlydt/xuly.php?id=<?php echo $row['id'] ?>" enctype="multipart/form-data">
	   <tr>
	  	<td>Hình ảnh</td>
	  	<td>
	  		<input type="file" name="hinhanh">
	  		<img src="modules/quanlydt/uploads/<?php echo $row['hinhanh'] ?>" width="150px">
	  	</td>

	  </tr>
	  <tr>
	    <td>Tình trạng</td>
	    <td>
	    	<select name="tinhtrang">
	    		<?php
	    		if($row['trang_thai']==1){ 
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
	    <td colspan="2"><input type="submit" name="suadt" value="Sửa đối tác"></td>
	  </tr>
 </form>
 <?php
 } 
 ?>

</table>
<a href="?action=quanlydt&query=lietke" class="btn btn-danger">
	Thoát
</a>
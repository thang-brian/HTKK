<?php
	$sql_sua = "SELECT * FROM logo WHERE id='$_GET[id]' LIMIT 1";
	$query_sua = mysqli_query($mysqli,$sql_sua);
?>
<h3>Sửa logo</h3>
<table border="1" width="100%" style="border-collapse: collapse;">
<?php
while($row = mysqli_fetch_array($query_sua)) {
?>
 <form method="POST" action="modules/quanlylogo/xuly.php?id=<?php echo $row['id'] ?>" enctype="multipart/form-data">
	   <tr>
	  	<td>Hình ảnh</td>
	  	<td>
	  		<input type="file" name="hinhanh">
	  		<img src="modules/quanlylogo/uploads/<?php echo $row['hinhanh'] ?>" width="150px">
	  	</td>

	  </tr>
	  <tr>
	    <td>Kiểu</td>
	    <td>
	    	<select name="kieu">
	    		<?php
	    		if($row['style']==1){ 
	    		?>
	    		<option value="1" selected>Nền xanh</option>
	    		<option value="0">Nền trắng</option>
	    		<?php
	    		}else{ 
	    		?>
	    		<option value="1">Nền xanh</option>
	    		<option value="0" selected>Nền trắng</option>
	    		<?php
	    		} 
	    		?>

	    	</select>
	    </td>
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
	    <td colspan="2"><input type="submit" name="sualogo" value="Sửa logo"></td>
	  </tr>
 </form>
 <?php
 } 
 ?>

</table>
<a href="?action=quanlylogo&query=lietke" class="btn btn-danger">
	Thoát
</a>
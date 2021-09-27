<?php
	$sql_sua_dv = "SELECT * FROM anh WHERE style ='kbvanchuyen' and id='$_GET[id]' LIMIT 1";
	$query_sua_dv = mysqli_query($mysqli,$sql_sua_dv);
?>
<p>Sửa dịch vụ</p>
<table border="1" width="100%" style="border-collapse: collapse;">
<?php
while($row = mysqli_fetch_array($query_sua_dv)) {
?>
 <form method="POST" action="modules/quanlykb-vc/xuly.php?id=<?php echo $row['id'] ?>" enctype="multipart/form-data">
	   <tr>
	  	<td>Hình ảnh</td>
	  	<td>
	  		<input type="file" name="hinhanh">
	  		<img src="modules/quanlykb-vc/uploads/<?php echo $row['hinhanh'] ?>" width="150px">
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
<a href="?action=quanlydvvc&query=lietke" class="btn btn-danger" >
	Thoát
</a>
<?php
	$sql_sua_nd = "SELECT * FROM noidung WHERE id='$_GET[id]' LIMIT 1";
	$query_sua_nd = mysqli_query($mysqli,$sql_sua_nd);
?>
<h3>Sửa dịch vụ</h3>
<table border="1" width="100%" style="border-collapse: collapse;">
<?php
while($row = mysqli_fetch_array($query_sua_nd)) {
?>
 <form method="POST" action="modules/quanlynd/xuly.php?id=<?php echo $row['id'] ?>" enctype="multipart/form-data">
	  <tr>
	  	<td>Nội dung Tiếng Việt</td>
	  	<td><textarea rows="10"  name="noidung" style="resize: none"><?php echo  $row['chitiet_vi'] ?></textarea></td>
	  </tr>
	   <tr>
	  	<td>Nội dung Tiếng Anh</td>
	  	<td><textarea rows="10"  name="nd_en" style="resize: none"><?php echo  $row['chitiet_en'] ?></textarea></td>
	  </tr>
	  <tr>
	    <td>Tình trạng</td>
	    <td>
	    	<select name="tinhtrang">
	    		<?php
	    		if($row['loaind']=='tintuc'){ 
	    		?>
	    		<option value="tintuc">Tin Tức</option>
	    		<option value="ykien">Ý kiến khách hàng</option>
				<option value="vbpl">Văn bản pháp luật</option>
	    		<?php
	    		}else{ 
	    		?>
	    		<option value="tintuc">Tin Tức</option>
	    		<option value="ykien">Ý kiến khách hàng</option>
				<option value="vbpl">Văn bản pháp luật</option>
	    		<?php
	    		} 
	    		?>

	    	</select>
	    </td>
	  </tr>
	   <tr>
	    <td colspan="2"><input type="submit" name="suand" value="Sửa sản phẩm"></td>
	  </tr>
 </form>
 <?php
 } 
 ?>

</table>
<a href="?action=quanlynd&query=lietke" class="btn btn-danger">
	Thoát
</a>
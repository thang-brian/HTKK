<?php
	$sql_sua_ft = "SELECT * FROM gioithieu_footer WHERE id='$_GET[id]' LIMIT 1";
	$query_sua_ft = mysqli_query($mysqli,$sql_sua_ft);
?>
<h3>Sửa thông tin giới thiệu</h3>
<table border="1" width="100%" style="border-collapse: collapse;">
<?php
while($row = mysqli_fetch_array($query_sua_ft)) {
?>
 <form method="POST" action="modules/quanlyfooter/xuly.php?id=<?php echo $row['id'] ?>" enctype="multipart/form-data">
	  <tr>
	  	<td>Tên công ty</td>
	  	<td><textarea rows="10"  name="tenct" style="resize: none"><?php echo  $row['tenct_vi'] ?></textarea></td>
	  </tr>
	  <tr>
	  	<td>Company name</td>
	  	<td><textarea rows="10"  name="compname" style="resize: none"><?php echo  $row['tenct_en'] ?></textarea></td>
	  </tr>
	   <tr>
	  	<td>Certification information</td>
	  	<td><textarea rows="10"  name="chungnhan" style="resize: none"><?php echo  $row['chungnhan_vi'] ?></textarea></td>
	  </tr>
	  <tr>
	  	<td>Thông tin chứng nhận</td>
	  	<td><textarea rows="10"  name="certificate" style="resize: none"><?php echo  $row['chungnhan_en'] ?></textarea></td>
	  </tr>
	  <tr>
	  	<td>Địa chỉ</td>
	  	<td><textarea rows="10"  name="diachi" style="resize: none"><?php echo  $row['diachi_vi'] ?></textarea></td>
	  </tr>
	  <tr>
	  	<td>Address</td>
	  	<td><textarea rows="10"  name="address" style="resize: none"><?php echo  $row['diachi_en'] ?></textarea></td>
	  </tr>
	  <tr>
	  	<td>Điện Thoại</td>
	  	<td><textarea rows="10"  name="phone" style="resize: none"><?php echo  $row['phone'] ?></textarea></td>
	  </tr>
	  <tr>
	  	<td>Email</td>
	  	<td><textarea rows="10"  name="email" style="resize: none"><?php echo  $row['email'] ?></textarea></td>
	  </tr>
	   <tr>
	    <td colspan="2"><input type="submit" name="suaft" value="Sửa thông tin"></td>
	  </tr>
 </form>
 <?php
 } 
 ?>

</table>
<a href="?action=quanlyft&query=lietke" class="btn btn-danger">
	Thoát
</a>
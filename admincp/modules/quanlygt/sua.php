<?php
	$sql_lietke_gt = "SELECT * FROM noidung WHERE loaind = 'gioithieu' ORDER BY id DESC";
	$query_sua_gt= mysqli_query($mysqli,$sql_lietke_gt);
?>
<h3>Sửa thông tin giới thiệu</h3>
<table border="1" width="100%" style="border-collapse: collapse;">
<?php
while($row = mysqli_fetch_array($query_sua_gt)) {
?>
 <form method="POST" action="modules/quanlygt/xuly.php?id=<?php echo $row['id'] ?>" enctype="multipart/form-data">
	  <tr>
	  	<td>Thông tin tiếng Việt</td>
	  	<td><textarea rows="10"  name="gt" style="resize: none"><?php echo  $row['chitiet_vi'] ?></textarea></td>
	  </tr>
	  <tr>
	  	<td>Thông tin tiếng Anh</td>
	  	<td><textarea rows="10"  name="gt_en" style="resize: none"><?php echo  $row['chitiet_en'] ?></textarea></td>
	  </tr>
	   <tr>
	    <td colspan="2"><input type="submit" name="suagt" value="Sửa thông tin"></td>
	  </tr>
 </form>
 <?php
 } 
 ?>

</table>
<a href="?action=quanlygt&query=lietke" class="btn btn-danger">
	Thoát
</a>
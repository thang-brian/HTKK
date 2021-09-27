<?php
	$sql_lietke_sp = "SELECT * FROM logo ORDER BY id ";
	$query_lietke_sp = mysqli_query($mysqli,$sql_lietke_sp);
?>
<a href="?action=quanlylogo&query=them" class="btn btn-primary">
<i class="fas fa-plus"> Thêm logo</i>
</a>
<fieldset>
  <legend>Liệt kê logo</legend>
  <table style="width:100%" border="1" style="border-collapse: collapse;">
  <tr>
    <th>STT</th>
    <th>Hình ảnh</th>
    <th>Trạng thái</th>
    <th>Kiểu logo</th>
    <th>Quản lý</th>
  
  </tr>
  <?php
  $i = 0;
  while($row = mysqli_fetch_array($query_lietke_sp)){
    $i++;
  ?>
  <tr>
    <td><?php echo $i ?></td>
    <td><img src="modules/quanlylogo/uploads/<?php echo $row['hinhanh'] ?>" width="150px"></td>
    <td><?php if($row['tinhtrang']==1){
        echo 'Kích hoạt';
      }else{
        echo 'Ẩn';
      } 
      ?>
      
    </td>
    <td><?php if($row['style']==1){
        echo 'nền xanh';
      }else{
        echo 'nền trắng';
      } 
      ?>
      
    </td>
    <td>
      <a onclick="return confirm('Bạn có muốn xóa logo?')" href="modules/quanlylogo/xuly.php?id=<?php echo $row['id'] ?>">Xoá</a> | <a href="?action=quanlylogo&query=sua&id=<?php echo $row['id'] ?>">Sửa</a> 
    </td>
   
  </tr>
  <?php
  } 
  ?>
 
</table>
</fieldset>
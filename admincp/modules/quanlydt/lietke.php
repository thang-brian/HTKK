<?php
	$sql_lietke_dt = "SELECT * FROM anh WHERE style = 'doitac' ORDER BY id DESC";
	$query_lietke_dt = mysqli_query($mysqli,$sql_lietke_dt);
?>
<a href="?action=quanlydt&query=them" class="btn btn-primary">
<i class="fas fa-plus"> Thêm logo</i>
</a>
<fieldset>
  <legend>Liệt kê Đối tác</legend>
  <table style="width:100%" border="1" style="border-collapse: collapse;">
  <tr>
    <th>STT</th>
    <th>Hình ảnh</th>
    <th>Trạng thái</th>
    <th>Quản lý</th>
  
  </tr>
  <?php
  $i = 0;
  while($row = mysqli_fetch_array($query_lietke_dt)){
    $i++;
  ?>
  <tr>
    <td><?php echo $i ?></td>
    <td><img src="modules/quanlydt/uploads/<?php echo $row['hinhanh'] ?>" width="150px"></td>
    <td><?php if($row['trang_thai']==1){
        echo 'Kích hoạt';
      }else{
        echo 'Ẩn';
      } 
      ?>
      
    </td>
    <td>
      <a onclick="return confirm('Bạn có muốn xóa đối tác này?')" href="modules/quanlydt/xuly.php?id=<?php echo $row['id'] ?>">Xoá</a> | <a href="?action=quanlydt&query=sua&id=<?php echo $row['id'] ?>">Sửa</a> 
    </td>
   
  </tr>
  <?php
  } 
  ?>
 
</table>
</fieldset>
<?php
	$sql_lietke_nd = "SELECT * FROM noidung ORDER BY id ";
	$query_lietke_nd= mysqli_query($mysqli,$sql_lietke_nd);
?>
<a href="?action=quanlynd&query=them" class="btn btn-primary">
<i class="fas fa-plus"> Thêm Nội dung</i>
</a>
<fieldset>
  <legend>Liệt kê nội dung văn bản</legend>
  <table style="width:100%" border="1" style="border-collapse: collapse;">
  <tr>
    <th>STT</th>
    <th>Loại nội dung</th>
    <th>Nội dung tiếng Việt</th>
    <th>Nội dung tiếng Anh</th>
    <th>Quản lý</th>
  
  </tr>
  <?php
  $i = 0;
  while($row = mysqli_fetch_array($query_lietke_nd)){
    $i++;
  ?>
  <tr>
    <td><?php echo $i ?></td>
    <td><?php if($row['loaind']=='tintuc'){
        echo 'TIN TỨC';
      }elseif($row['loaind']=='ykien'){
        echo 'Ý KIẾN KHÁCH HÀNG';
      }else{
        echo 'VĂN BẢN PHÁP LUẬT';
      } 
      ?>
      
    </td>
    <td><?php echo $row['chitiet_vi'] ?></td>
    <td><?php echo $row['chitiet_en'] ?></td>
    <td>
      <a onclick="return confirm('Bạn có muốn xóa nội dung này?')" href="modules/quanlynd/xuly.php?id=<?php echo $row['id'] ?>">Xoá</a> | <a href="?action=quanlynd&query=sua&id=<?php echo $row['id'] ?>">Sửa</a> 
    </td>
   
  </tr>
  <?php
  } 
  ?>
 
</table>
</fieldset>
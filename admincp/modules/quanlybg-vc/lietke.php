<?php
	$sql_lietke_dv = "SELECT * FROM anh WHERE style ='bgvanchuyen' ORDER BY id ";
	$query_lietke_dv= mysqli_query($mysqli,$sql_lietke_dv);
?>
<a href="?action=quanlybgvc&query=them" class="btn btn-primary">
<i class="fas fa-plus"> Thêm dịch vụ</i>
</a>
<fieldset>
  <legend>Liệt kê bảng giá vận chuyển</legend>
  <table style="width:100%" border="1" style="border-collapse: collapse;">
  <tr>
    <th>STT</th>
    <th>Hình ảnh</th>
    <th>Quốc gia</th>
    <th>Nội dung tiếng Việt</th>
    <th>Nội dung tiếng Anh</th>
    <th>Mô tả tiếng Việt</th>
    <th>Mô tả tiếng Anh</th>
    <th>Trạng thái</th>
    <th>Quản lý</th>
  
  </tr>
  <?php
  $i = 0;
  while($row = mysqli_fetch_array($query_lietke_dv)){
    $i++;
  ?>
  <tr>
    <td><?php echo $i ?></td>
    <td><img src="modules/quanlybg-vc/uploads/<?php echo $row['hinhanh'] ?>" width="150px"></td>
    <td><?php echo $row['nation']?></td>
    <td><?php echo $row['nd_vi'] ?></td>
    <td><?php echo $row['nd_en'] ?></td>
    <td><?php echo $row['mota_vi'] ?></td>
    <td><?php echo $row['mota_en'] ?></td>
    <td><?php if($row['trang_thai']==1){
        echo 'Kích hoạt';
      }else{
        echo 'Ẩn';
      } 
      ?>
      
    </td>
    <td>
      <a onclick="return confirm('Bạn có muốn xóa?')" href="modules/quanlybg-vc/xuly.php?id=<?php echo $row['id'] ?>">Xoá</a> | <a href="?action=quanlybgvc&query=sua&id=<?php echo $row['id'] ?>">Sửa</a> 
    </td>
   
  </tr>
  <?php
  } 
  ?>
 
</table>
</fieldset>
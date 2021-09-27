<?php
	$sql_lietke_gt = "SELECT * FROM noidung WHERE loaind = 'gioithieu' ORDER BY id ";
	$query_lietke_gt= mysqli_query($mysqli,$sql_lietke_gt);
?>
<fieldset>
  <legend>Thông tin giới thiệu HTKK</legend>
  <?php
  while($row = mysqli_fetch_array($query_lietke_gt)){
  ?>
    <div>
      <b>Thông tin tiếng Việt </b><p><?php echo $row['chitiet_vi'] ?></p>
    </div>
    <div>
      <b>Thông tin tiếng Anh </b><p><?php echo $row['chitiet_en'] ?></p>
    </div>
    
    <div>
      <b>Quản lý: </b><a href="?action=quanlygt&query=sua&id=<?php echo $row['id'] ?>">Sửa</a> 
    </div>
   
  </tr>
  <?php
  } 
  ?>
 
</table>
</fieldset>
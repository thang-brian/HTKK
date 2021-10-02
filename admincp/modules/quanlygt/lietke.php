<?php
  $loai = $_GET['loai'];
  if($loai == 'gioithieu'){
    $sql_lietke_gt = "SELECT * FROM noidung WHERE loaind = 'gioithieu' ORDER BY id ";
	  $query_lietke_gt= mysqli_query($mysqli,$sql_lietke_gt);
  }else{
    $sql_lietke_gt = "SELECT * FROM noidung WHERE loaind = 'gioithieuct' ORDER BY id ";
	  $query_lietke_gt= mysqli_query($mysqli,$sql_lietke_gt);
  }
	
?>
<fieldset>
  <legend>Thông tin giới thiệu </legend>
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
      <b>Quản lý: </b><a href="?action=quanlygt&query=sua&id=<?php echo $row['id'] ?>&loai=<?php echo $row['loaind'] ?>">Sửa</a> 
    </div>
   
  </tr>
  <?php
  } 
  ?>
 
</table>
</fieldset>
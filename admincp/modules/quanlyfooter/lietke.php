<?php
	$sql_lietke_ft = "SELECT * FROM gioithieu_footer ORDER BY id ";
	$query_lietke_ft= mysqli_query($mysqli,$sql_lietke_ft);
?>
<fieldset>
  <legend>Thông tin giới thiệu footer</legend>
  <?php
  while($row = mysqli_fetch_array($query_lietke_ft)){
  ?>
    <div>
      <b>Tên công ty: </b><p><?php echo $row['tenct_vi'] ?></p>
    </div>
    <div>
      <b>Company name</b><p><?php echo $row['tenct_en'] ?></p>
    </div>
    <div>
      <b>Thông tin chứng nhận: </b><p><?php echo $row['chungnhan_vi'] ?></p>
    </div>
    <div>
      <b>Certification information:</b><p><?php echo $row['chungnhan_en'] ?></p>
    </div>
    <div>
      <b>Địa chỉ:</b><p><?php echo $row['diachi_vi'] ?></p>
    </div>
    <div>
      <b>Address:</b><p><?php echo $row['diachi_en'] ?></p>
    </div>
    <div>
      <b>Điện thoại:</b><p><?php echo $row['phone'] ?></p>
    </div>
    <div>
      <b>Email: </b><p><?php echo $row['email'] ?></p>
    </div>
    <div>
      <b>Quản lý:</b><a href="?action=quanlyft&query=sua&id=<?php echo $row['id'] ?>">Sửa</a> 
    </div>
   
  </tr>
  <?php
  } 
  ?>
 
</table>
</fieldset>
<?php
include('../../config/config.php');

$gt = $_POST['gt'];
$gt_en = $_POST['gt_en'];


if(isset($_POST['suagt'])){
	//sua
	$sql_update = "UPDATE noidung SET chitiet_vi='".$gt."',chitiet_en='".$gt_en."' WHERE id='$_GET[id]'";
	if(mysqli_query($mysqli,$sql_update)){
		echo 'Error: '.$sql_update;
	}
	header('Location:../../index.php?action=quanlygt&query=lietke');
}

?>
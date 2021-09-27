<?php
include('../../config/config.php');

$tencongty = $_POST['tenct'];
$company_name = $_POST['compname'];
$chungnhan = $_POST['chungnhan'];
$certificate = $_POST['certificate'];
$diachi = $_POST['diachi'];
$address = $_POST['address'];
$phone = $_POST['phone'];
$email = $_POST['email'];


if(isset($_POST['suaft'])){
	//sua
	$sql_update = "UPDATE gioithieu_footer SET tenct_vi='".$tencongty."',tenct_en='".$company_name."',chungnhan_vi='".$chungnhan."',chungnhan_en='".$certificate."',diachi_vi='".$diachi."',diachi_en='".$address."',phone='".$phone."',email='".$email."' WHERE id='$_GET[id]'";
	if(mysqli_query($mysqli,$sql_update)){
		echo 'Error: '.$sql_update;
	}
	header('Location:../../index.php?action=quanlyft&query=lietke');
}

?>
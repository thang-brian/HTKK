<?php
include('../../config/config.php');

$noidung = $_POST['noidung'];
$nd_en = $_POST['nd_en'];
$tinhtrang = $_POST['tinhtrang'];


if(isset($_POST['themnd'])){
	//them
	$sql_them = "INSERT INTO noidung(chitiet_vi,chitiet_en,loaind) VALUES('".$noidung."','".$nd_en."','".$tinhtrang."')";
	if(mysqli_query($mysqli,$sql_them)){
	header('Location:../../index.php?action=quanlynd&query=lietke');
	}else{
		echo "Error: " . $sql_them . "<br>";
	}
}elseif(isset($_POST['suand'])){
	//sua

	$sql_update = "UPDATE noidung SET chitiet_vi='".$noidung."',chitiet_en='".$nd_en."',loaind='".$tinhtrang."' WHERE id='$_GET[id]'";
	mysqli_query($mysqli,$sql_update);
	header('Location:../../index.php?action=quanlynd&query=lietke');
}else{
	$id=$_GET['id'];
	$sql = "SELECT * FROM noidung WHERE id = '$id' LIMIT 1";
	$query = mysqli_query($mysqli,$sql);
	$sql_xoa = "DELETE FROM noidung WHERE id='".$id."'";
	mysqli_query($mysqli,$sql_xoa);
	header('Location:../../index.php?action=quanlynd&query=lietke');
}

?>
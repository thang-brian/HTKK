<?php
include('../../config/config.php');

//xuly hinh anh
$hinhanh = $_FILES['hinhanh']['name'];
$hinhanh_tmp = $_FILES['hinhanh']['tmp_name'];
$hinhanh = time().'_'.$hinhanh;
$noidung = $_POST['noidung'];
$nd_en = $_POST['nd_en'];
$tinhtrang = $_POST['tinhtrang'];


if(isset($_POST['themdv'])){
	//them
	$sql_them = "INSERT INTO anh(hinhanh,nd_vi,nd_en,trang_thai) VALUES('".$hinhanh."','".$noidung."','".$nd_en."','".$tinhtrang."')";
	if(mysqli_query($mysqli,$sql_them)){
	move_uploaded_file($hinhanh_tmp,'uploads/'.$hinhanh);
	header('Location:../../index.php?action=quanlydv&query=lietke');
	}else{
		echo "Error: " . $sql_them . "<br>";
	}
}elseif(isset($_POST['suadv'])){
	//sua
	if(empty($_FILES['hinhanh']['name'])){
		$sql_update = "UPDATE anh SET nd_vi='".$noidung."',nd_en='".$nd_en."',trang_thai='".$tinhtrang."' WHERE id='$_GET[id]'";
	
	}else{
		move_uploaded_file($hinhanh_tmp,'uploads/'.$hinhanh);
		$sql_update = "UPDATE anh SET hinhanh='".$hinhanh."',nd_en='".$noidung."',nd_en='".$nd_en."',trang_thai='".$tinhtrang."' WHERE id='$_GET[id]'";
		//xoa hinh anh cu
		$sql = "SELECT * FROM anh WHERE id = '$_GET[id]' LIMIT 1";
		$query = mysqli_query($mysqli,$sql);
		while($row = mysqli_fetch_array($query)){
			unlink('uploads/'.$row['hinhanh']);
		}
	}
		mysqli_query($mysqli,$sql_update);
		header('Location:../../index.php?action=quanlydv&query=lietke');
}else{
	$id=$_GET['id'];
	$sql = "SELECT * FROM anh WHERE id = '$id' LIMIT 1";
	$query = mysqli_query($mysqli,$sql);
	while($row = mysqli_fetch_array($query)){
		unlink('uploads/'.$row['hinhanh']);
	}
	$sql_xoa = "DELETE FROM anh WHERE id='".$id."'";
	mysqli_query($mysqli,$sql_xoa);
	header('Location:../../index.php?action=quanlydv&query=lietke');
}

?>
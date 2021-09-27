<?php
include('../../config/config.php');
//xuly hinh anh
$hinhanh = $_FILES['hinhanh']['name'];
$hinhanh_tmp = $_FILES['hinhanh']['tmp_name'];
$hinhanh = time().'_'.$hinhanh;
$style = 'doitac';
$tinhtrang = $_POST['tinhtrang'];
if(isset($_POST['themdt'])){
	//them
	$sql_them = "INSERT INTO anh(hinhanh,style,trang_thai) VALUES('".$hinhanh."','".$style."','".$tinhtrang."')";
	if(mysqli_query($mysqli,$sql_them)){
        echo "New record created successfully";
        move_uploaded_file($hinhanh_tmp,'uploads/'.$hinhanh);
	    header('Location:../../index.php?action=quanlydt&query=lietke');
    }else{
        echo "Error: " . $sql_them . "<br>";
    }
}elseif(isset($_POST['suadt'])){
	//sua
	if(empty($_FILES['hinhanh']['name'])){
		$sql_update = "UPDATE anh SET trang_thai='".$tinhtrang."'WHERE id='$_GET[id]'";
	}else{
		move_uploaded_file($hinhanh_tmp,'uploads/'.$hinhanh);
		$sql_update = "UPDATE anh SET hinhanh='".$hinhanh."',trang_thai='".$tinhtrang."' WHERE id='$_GET[id]'";
		//xoa hinh anh cu
		$sql = "SELECT * FROM anh WHERE id = '$_GET[id]' LIMIT 1";
		$query = mysqli_query($mysqli,$sql);
		while($row = mysqli_fetch_array($query)){
			unlink('uploads/'.$row['hinhanh']);
		}
		}
	if(mysqli_query($mysqli,$sql_update)){
		header('Location:../../index.php?action=quanlydt&query=lietke');
	}else{
		echo "Error: " . $sql_update;
	}
	
	
}else{
	$id=$_GET['id'];
	$sql = "SELECT * FROM anh WHERE id = '$id' LIMIT 1";
	$query = mysqli_query($mysqli,$sql);
	while($row = mysqli_fetch_array($query)){
		unlink('uploads/'.$row['hinhanh']);
	}
	$sql_xoa = "DELETE FROM anh WHERE id='".$id."'";
	if(mysqli_query($mysqli,$sql_xoa)){
		header('Location:../../index.php?action=quanlydt&query=lietke');
	}else{
		echo "Error: " .$sql_xoa;
	}
	
}

?>
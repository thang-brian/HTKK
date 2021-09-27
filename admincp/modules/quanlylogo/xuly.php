<?php
include('../../config/config.php');
//xuly hinh anh
$hinhanh = $_FILES['hinhanh']['name'];
$hinhanh_tmp = $_FILES['hinhanh']['tmp_name'];
$hinhanh = time().'_'.$hinhanh;
$tinhtrang = $_POST['tinhtrang'];
$kieu = $_POST['kieu'];
if(isset($_POST['themlogo'])){
	//them
	$sql_them = "INSERT INTO logo(hinhanh,style,tinhtrang) VALUES('".$hinhanh."','".$tinhtrang."','".$kieu."')";
	if(mysqli_query($mysqli,$sql_them)){
        echo "New record created successfully";
        move_uploaded_file($hinhanh_tmp,'uploads/'.$hinhanh);
	    header('Location:../../index.php?action=quanlylogo&query=lietke');
    }else{
        echo "Error: " . $sql_them . "<br>";
    }
}elseif(isset($_POST['sualogo'])){
	//sua
	if(empty($_FILES['hinhanh']['name'])){
		$sql_update = "UPDATE logo SET tinhtrang='".$tinhtrang."',style='".$kieu."'WHERE id='$_GET[id]'";
	}else{
		move_uploaded_file($hinhanh_tmp,'uploads/'.$hinhanh);
		$sql_update = "UPDATE logo SET hinhanh='".$hinhanh."',tinhtrang='".$tinhtrang."',style='".$kieu."' WHERE id='$_GET[id]'";
		//xoa hinh anh cu
		$sql = "SELECT * FROM logo WHERE id = '$_GET[id]' LIMIT 1";
		$query = mysqli_query($mysqli,$sql);
		while($row = mysqli_fetch_array($query)){
			unlink('uploads/'.$row['hinhanh']);
		}
	}
	if(mysqli_query($mysqli,$sql_update)){
		header('Location:../../index.php?action=quanlylogo&query=lietke');
	}else{
		echo "Error: " . $sql_update;
	}
	
	
}else{
	$id=$_GET['id'];
	$sql = "SELECT * FROM logo WHERE id = '$id' LIMIT 1";
	$query = mysqli_query($mysqli,$sql);
	while($row = mysqli_fetch_array($query)){
		unlink('uploads/'.$row['hinhanh']);
	}
	$sql_xoa = "DELETE FROM logo WHERE id='".$id."'";
	if(mysqli_query($mysqli,$sql_xoa)){
		header('Location:../../index.php?action=quanlylogo&query=lietke');
	}else{
		echo "Error: " .$sql_xoa;
	}
	
}

?>
<?php 
    session_start();
    include("../../../../admincp/config/config.php");
    $sql_nenxanh1 = "SELECT * FROM logo WHERE style = 1 ORDER BY id DESC";
	$query_lietke_nx1 = mysqli_query($mysqli,$sql_nenxanh1);
    $sql_nenxanh = "SELECT * FROM logo WHERE style = 1 ORDER BY id DESC";
	$query_lietke_nx = mysqli_query($mysqli,$sql_nenxanh);
    $sql_lietke_gt = "SELECT * FROM noidung WHERE loaind = 'gioithieuct' ORDER BY id ";
	$query_lietke_gt= mysqli_query($mysqli,$sql_lietke_gt);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../../css/banggia-chuyentien.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
    <title>HTKK | Vận chuyển hàng Mỹ</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script language="javascript" src="../../../../language/bg_ct.js"></script>
</head>
<body>
    <?php 
        include('../../../../language/lang_config.php');
        include("../chitiet-US/header.php");
        include("../chitiet-US/main.php");
        include("../chitiet-US/footer.php");
    ?>
</body>
</html>
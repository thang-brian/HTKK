<?php 
session_start();
include("../../../admincp/config/config.php");
include('../../../language/lang_config.php');
$sql_header = "SELECT * FROM logo WHERE style = 0 ORDER BY id DESC";
$query_lietke_nt = mysqli_query($mysqli,$sql_header);
$sql_lietke_gt = "SELECT * FROM noidung WHERE loaind = 'gioithieu' ORDER BY id DESC";
$query_lietke_gt= mysqli_query($mysqli,$sql_lietke_gt);
$sql_lietke_dv = "SELECT * FROM anh WHERE style ='dvvanchuyen' and nation = 'Nhật Bản' and trang_thai = 1  ORDER BY id ";
$query_lietke_dv= mysqli_query($mysqli,$sql_lietke_dv);
$sql_lietke_kb = "SELECT * FROM anh WHERE style ='kbvanchuyen'  ORDER BY id ";
$query_lietke_kb= mysqli_query($mysqli,$sql_lietke_kb);
$sql_lietke_bg = "SELECT * FROM anh WHERE style ='bgvanchuyen' and nation = 'Nhật Bản'   ORDER BY id ";
$query_lietke_bg= mysqli_query($mysqli,$sql_lietke_bg);
$sql_lietke_tt = "SELECT * FROM anh WHERE style ='ttvanchuyen'  ORDER BY id ";
$query_lietke_tt= mysqli_query($mysqli,$sql_lietke_tt);
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../css/CS-CN.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
    <title>HTKK | Vận chuyển hàng Nhật</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script language="javascript" src="../../../language/bg_ct.js"></script>
</head>
<body>
    <header>
        <div class="menu" >
            <nav>
                <?php 
                    while($row = mysqli_fetch_array($query_lietke_nt)){
                ?>
                <img style="width: 175px;" src="../../../admincp/modules/quanlylogo/uploads/<?php echo $row['hinhanh'] ?>" alt="Logo">
                <?php }?>
                <li>
                    <a href="../../index.php"><?php echo $lang['home'] ?></a>
                </li>
                <li>
                    <a href="#" ><?php echo $lang['vncnJP'] ?></a>
                </li>
                <li>
                    <a href="#" ><?php echo $lang['mhcnJP'] ?></a>
                </li>
                <li>
                    <a href="../Japan/chitiet-JP/thongquan/thongquan.php" ><?php echo $lang['thquan'] ?></a>
                </li>
                <li>
                    <a href="../Japan/chitiet-JP/index.php?quanly=chuyentien" ><?php echo $lang['chuyentien'] ?></a>
                </li>
                <li>
                    <a href="../Japan/chitiet-JP/index.php?quanly=banggia" ><?php echo $lang['banggia'] ?></a>
                </li>
                <li>
                    <a href="#" ><?php echo $lang['tintuc'] ?></a>
                </li>
                <li>
                    <a href="#" ><?php echo $lang['lienhe'] ?></a>
                </li>
            </nav>
        </div>
        <div class="pr-cn" >
        <p ><?php echo $lang['chuyenvc'] ?></p>
            <br>
            <br>
            <br>
            <p> <?php echo $lang['vtJP'] ?></p>
            <br>
            <br>
            <br>
            <p class="pr-cn-value"><?php echo $lang['pr'] ?></p>
        </div>
    </header>
    <body>
        <div><img src="../../../img/pr-cn-background.png" style="width: 100%;height: 36px;" alt=""></div>
        <p class="introduction"><?php echo $lang['introduct'] ?></p>
        <div class="introduction2" >
            <?php
                while($row = mysqli_fetch_array($query_lietke_gt)){
            ?>
            <p class="lang" key="p">
                <?php echo $row['chitiet_'.$_SESSION['lang']] ?>
            </p>
            <?php }?>
            <button class="btn"><?php echo $lang['xemt'] ?></button>
        </div>
        <div class="dv" >
        <p class="introduction"><?php echo $lang['dvtt'] ?></p>
            <img src="../../../img/border-dv-cn.png" style="width:100%" alt="">
            <div class="dichvu-value" >
                <?php
                    while($row = mysqli_fetch_array($query_lietke_dv)){
                ?>
                <div class="dichvu-vc" >
                    <img src="../../../admincp/modules/quanlydv-vc/uploads/<?php echo $row['hinhanh'] ?>" class="img-dv"  alt="">
                    <p class="dichvu-vl-background lang" key="dvvcUS" ><?php echo $row['nd_'.$_SESSION['lang']] ?></p>
                    <p class="dichvu-vl-txt lang" key="p">
                        <?php echo $row['mota_'.$_SESSION['lang']] ?></p>
                </div>
                <?php }?>
            </div>
        </div>
        <div class="khacbiet" >
            <p class="introduction"><?php echo $lang['skhac'] ?></p>
            <img src="../../../img/border-dv-cn.png" style="width:100%" alt="">
            <div class="dichvu-value">
                <?php
                    while($row = mysqli_fetch_array($query_lietke_kb)){
                ?>
                <div class="div-kb">
                    <div class="container">
                        <img src="../../../admincp/modules/quanlykb-vc/uploads/<?php echo $row['hinhanh'] ?>" value="Hi" class="img-khacbiet lang" alt="logo">
                        <div class="kb-txt"><?php echo $row['nd_'.$_SESSION['lang']] ?></div>
                    </div>
                </div>
                <?php }?>
            </div>
        </div>
        <div>
            <p class="introduction"><?php echo $lang['qtchuyen'] ?></p>
            <img src="../../../img/border-dv-cn.png" style="width:100%" alt="">
            <div class="quytrinh-chang" >
                <div class="qt-value" >
                    <img src="../../../img/yeucau-CN.png"alt="">
                </div>
                <div class="qt-value">
                    <img src="../../../img/chuyenhang-CN.png"alt="">
                </div>
                <div class="qt-value">
                    <img src="../../../img/giaohang-CN.png"alt="">
                </div>
                <div class="qt-value">
                    <img src="../../../img/thanhtoan-CN.png"alt="">
                </div>
            </div>
            <div class="qt-number" >
                <img src="../../../img/border-dv-cn.png" style="width:11%" alt="">
                <img src="../../../img/qt1-CN.png" class="qt1-img" alt="">
                <img src="../../../img/border-dv-cn.png" style="width:24%" alt="">
                <img src="../../../img/qt2-CN.png" class="qt1-img" alt="">
                <img src="../../../img/border-dv-cn.png" style="width:24%" alt="">
                <img src="../../../img/qt3-CN.png" class="qt1-img" alt="">
                <img src="../../../img/border-dv-cn.png" style="width:24%" alt="">
                <img src="../../../img/qt4-CN.png" class="qt1-img" alt="">
                <img src="../../../img/border-dv-cn.png" style="width:15.1%" alt="">
            </div>
            <div class="quytrinh-chang" >
                    <p class="qt-txt" ><?php echo $lang['qt1'] ?></p>
                    <p class="qt-txt" ><?php echo $lang['qt2'] ?></p>
                    <p class="qt-txt " ><?php echo $lang['qt3'] ?></p>
                    <p class="qt-txt " ><?php echo $lang['qt4'] ?></p>
            </div>
        </div>
        <div class="dv" >
            <p class="introduction"><?php echo $lang['bgvc'] ?></p>
            <img src="../../../img/border-dv-cn.png" style="width:100%" alt="">
            <div class="dichvu-value" >
                <?php
                    while($row = mysqli_fetch_array($query_lietke_bg)){
                ?>
                <div class="dichvu-vc" >
                    <img src="../../../admincp/modules/quanlybg-vc/uploads/<?php echo $row['hinhanh'] ?>" class="img-dv" alt="">
                    <p class="dichvu-vl-background lang" key="bgCALI" ><?php echo $row['nd_'.$_SESSION['lang']] ?> </p>
                    <p class="dichvu-vl-txt lang" key="p">
                        <?php echo $row['mota_'.$_SESSION['lang']] ?></p>
                </div>
                <?php }?>
            </div>
        </div>
        <div class="dv" >
            <p class="introduction" ><?php echo $lang['tintuc'] ?></p>
            <img src="../../../img/border-dv-cn.png" style="width:100%" alt="">
            <div class="dichvu-value" >
                <?php
                    while($row = mysqli_fetch_array($query_lietke_tt)){
                ?>
                <div class="dichvu-vc" >
                    <img src="../../../admincp/modules/quanlytt-vc/uploads/<?php echo $row['hinhanh'] ?>" class="img-dv" alt="">
                    <p class="dichvu-vl-background lang" key="hoptac" ><?php echo $row['nd_'.$_SESSION['lang']] ?> </p>
                    <p class="dichvu-vl-txt lang" key="p">
                        <?php echo $row['mota_'.$_SESSION['lang']] ?></p>    
                    </p>
                </div>
                <?php }?>
            </div>
            <button class="btn"><?php echo $lang['xemtc'] ?></button>
        </div>
    </body>
    <footer style="margin-top: 10px; " >
        <div class="footer-menu">
            <div class="footer-menu1">
                <p><?php echo $lang['hotro'] ?></p>
                <p><?php echo $lang['quydinh'] ?></p>
            </div>
            <p class="footer-menu2"><?php echo $lang['lienhe'] ?></p>
        </div>
        <div class="footer-menu">
            <img src="../../../img/thongbaoBCT.png" class="img-BCT" alt="">
            <p class="footer-txt " >
                Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat .
            </p>
            <p class="footer-txt " >
                Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat .
            </p>
            <p class="footer-txt " >
                Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat .
            </p>
        </div>
        <hr>
        <div class="link-social">
            <p><?php echo $lang['social'] ?></p>
            <br>
            <div style="padding: 15px;" >
                <a href="#"><i class="fab fa-facebook"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-youtube"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
    </footer>
</body>
</html>
<?php 
    session_start();
    include("../admincp/config/config.php");
    $sql_nentrang = "SELECT * FROM logo WHERE style = 0 and tinhtrang = 1 ORDER BY id DESC";
	$query_lietke_nt = mysqli_query($mysqli,$sql_nentrang);
    $sql_nenxanh = "SELECT * FROM logo WHERE style = 1 and tinhtrang = 1 ORDER BY id DESC";
	$query_lietke_nx = mysqli_query($mysqli,$sql_nenxanh);
    //Dịch vụ
    $sql_dv = "SELECT * FROM anh WHERE style = '' and trang_thai = 1 ORDER BY id ASC";
	$query_lietke_dv = mysqli_query($mysqli,$sql_dv);
    $sql_nd_tt = "SELECT * FROM noidung WHERE loaind='tintuc' ORDER BY id ASC";
	$query_lietke_nd_tt = mysqli_query($mysqli,$sql_nd_tt);
    $sql_nd_ttft = "SELECT * FROM noidung WHERE loaind='tintuc' ORDER BY id ASC";
	$query_lietke_nd_ttft = mysqli_query($mysqli,$sql_nd_ttft);
    $sql_nd_yk = "SELECT * FROM noidung WHERE loaind='ykien' ORDER BY id ASC";
	$query_lietke_nd_yk = mysqli_query($mysqli,$sql_nd_yk);
    $sql_nd_pl = "SELECT * FROM noidung WHERE loaind='vbpl' ORDER BY id ASC";
	$query_lietke_nd_pl = mysqli_query($mysqli,$sql_nd_pl);
    $sql_dt = "SELECT * FROM anh WHERE style = 'doitac' and trang_thai = 1 ORDER BY id ASC";
	$query_lietke_dt = mysqli_query($mysqli,$sql_dt);
    $sql_ft = "SELECT * FROM gioithieu_footer ORDER BY id ASC";
	$query_lietke_ft = mysqli_query($mysqli,$sql_ft);
    include('../language/lang_config.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/CS.css">
    <link type="text/css" rel="stylesheet" href="../css/magicscroll.css"/>
    <script type="text/javascript" src="../js/magicscroll.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
    <title>HTKK | Trang chủ</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        
    </script>
</head>
<body>
    <div class="sl" >
        <p>
            Chọn ngôn ngữ: <button class="translate" id="vi">
                                <a href="../pages/index.php?lang=vi"><img src="../img/vietnam.png" alt=""></a>
                            </button> 
                            <button class="translate" id="en">
                                <a href="../pages/index.php?lang=en"><img src="../img/anh.png" alt=""></a>
                            </button>
                            
        </p>
    </div> 
    

    <header class="menu">
        <?php 
            while($row = mysqli_fetch_array($query_lietke_nt)){
        ?>
        <img style="width:200px;height:100px" src="../admincp/modules/quanlylogo/uploads/<?php echo $row['hinhanh'] ?>" alt="Logo">
        <?php 
            }
        ?>
        <nav>
            <li class="logo">
                <a href=""><i style="color:white" class="fas fa-home"></i></a>
            </li>
            <li class="dropdown">
                    <div class="dropdown-item lang" >
                        <?php echo $lang['P&S'] ?>
                    </div>
                    
                    <div class="dropdown-content">
                        <a href="#"><?php echo $lang['africa'] ?></a>
                        <a href="#"><?php echo $lang['eu'] ?></a>
                        <a href="#"><?php echo $lang['td'] ?> </a>
                        <a href="#"><?php echo $lang['uc'] ?></a>
                        <div class="showright-america-item">
                            <a href="#"><?php echo $lang['america'] ?> </a>
                            <div class="showright-america" >
                                <a href="../pages/main/America/vc-US.php"><?php echo $lang['us'] ?> </a>
                            </div>
                        </div>
                        <div class="showright-asia-item" >
                            <a href="#"><?php echo $lang['asia'] ?></a>
                            <div class="showright-asia" >
                                <a href="../pages/main/China/vc-china.php"><?php echo $lang['china'] ?></a>
                                <a href="../pages/main/Korea/vc-KR.php" ><?php echo $lang['korea'] ?> </a>
                                <a href="../pages/main/Japan/vc-JP.php"><?php echo $lang['japan'] ?> </a>
                            </div>
                        </div>
                        
                    </div>
            </li>
            <li>
                <a href="#"><a href="../pages/main/Japan/vc-JP.php"><?php echo $lang['company'] ?> </a></a>
            </li>
            <li>
                <a href="#"><?php echo $lang['partner'] ?> </a>
            </li>
            <li>
                <a href=""><?php echo $lang['recruitment'] ?> </a>
            </li>
            <li>
                <a href="" ><?php echo $lang['pay'] ?> </a>
            </li>
            <li>
                <a href="" ><?php echo $lang['contact'] ?> </a>
            </li>
            <li>
                <a href="" > <?php echo $lang['log in'] ?> </a> / <a href="#" ><?php echo $lang['sign in'] ?> </a>
            </li>
        </nav>
    </header>
    <div class="background">
        <img style="width: 100%; height: 300px; ;" src="../img/background.png" alt="background">
    </div>
    <body class="main">
        <div class="tieude">
        <i class="fas fa-bars"></i> <h3 ><?php echo $lang['tieubieu'] ?></h3>
        </div>
        <div class="dichvu">
            <?php 
                while($row = mysqli_fetch_array($query_lietke_dv)){
            ?>
            <div class="dinhdang-dichvu" >
                <img class="pic-main" src="../admincp/modules/quanlydv/uploads/<?php echo $row['hinhanh'] ?>" alt="Vận chuyển đường bộ">
                <p class="dichvu-value lang" key="duongbo">
                    <?php echo $row['nd_'.$_SESSION['lang']] ?>
                </p>
            </div>
            <?php }?>
        </div>
        
        <div class="box-1" >
            <p class="box-a " ><?php echo $lang['news'] ?></p>
            <p class="box-a " ><?php echo $lang['review'] ?></p>
            <p class="box-a " ><?php echo $lang['pl'] ?></p>
            <p class="box-a "><?php echo $lang['tra'] ?></p>
        </div>
        <div class="box-2" >
            <marquee direction="up" scrollamount="3" class="box-2-border">
                <?php 
                    while($row = mysqli_fetch_array($query_lietke_nd_tt)){
                ?>
                <p direction="up" class="nd-tintuc" >
                    <i class="far fa-newspaper"></i>
                    <?php 
                            echo $row['chitiet_'.$_SESSION['lang']] ;
                    ?>
                </p>
                <?php }?>
            </marquee>
            <marquee direction="up" scrollamount="3" class="box-2-border">
                <?php 
                    while($row = mysqli_fetch_array($query_lietke_nd_yk)){
                ?>
                <p direction="up" class="nd-tintuc" >
                    <i class="fas fa-comment-dots"></i>
                    <?php 
                            echo $row['chitiet_'.$_SESSION['lang']] ;
                    ?>
                </p>
                <?php }?>
            </marquee>
            <marquee direction="up" scrollamount="3" class="box-2-border">
                <?php 
                    while($row = mysqli_fetch_array($query_lietke_nd_pl)){
                ?>
                <p direction="up" class="nd-tintuc" >
                    <i class="fas fa-gavel"></i>
                    <?php 
                            echo $row['chitiet_'.$_SESSION['lang']] ;
                    ?>
                </p>
                <?php }?>
            </marquee>
            <table class="form" >
                <tr>
                    <td>From port: </td>
                    <td><input type="text"></td>
                </tr>
                <tr>
                    <td>To port: </td>
                    <td><input type="text"></td>
                </tr>
                <tr>
                    <td>Date: </td>
                    <td><input type="date"></td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="checkbox">Cut of time atload port
                        <br>
                        <input type="checkbox">EAT at destination port
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><input type="submit" value="<?php echo $lang['trabtn'] ?>"></td>
                </tr>
            </table>
             
        </div>
        <div>
            <div class="tieude">
            <i class="far fa-handshake"></i> <h3><?php echo $lang['dtkh'] ?></h3>
            </div>
            <div class="MagicScroll">
                <?php 
                    while($row = mysqli_fetch_array($query_lietke_dt)){
                ?>
                <img style="width:300px;height:100px;padding:10px 30px" src="../admincp/modules/quanlydt/uploads/<?php echo $row['hinhanh'] ?>" alt="Logo">
                <?php }?>
            </div>
        </div>
        <div >
            <h3 style="text-align: center;margin-top: 30px;margin-bottom: 30px;color: #467adb;font-size: 20px;" ><?php echo $lang['gp'] ?></h3>
            <div class="giaiphap" >
                <div class="giaiphap-value" >
                    <img class="giapphap-img" src="https://cdn.vietnambiz.vn/2019/10/24/tieu-chuan-chat-luong-min-15718907409811664827358.jpg" alt="Kho bãi">
                    <p><?php echo $lang['gpkho'] ?></p>
                    <br>
                    <br>
                    <p><?php echo $lang['khov&n'] ?></p>
                    <p><?php echo $lang['kholon'] ?></p>
                </div>
                <div class="giaiphap-value">
                    <img class="giapphap-img" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTpJaSaUVCPIpRnItw0NKYs4DQMUswEmnA6XQ&usqp=CAU" alt="">
                    <p><?php echo $lang['vtpp'] ?></p>
                    <br>
                    <br>
                    <p><?php echo $lang['qlvn'] ?></p>
                    <p><?php echo $lang['qll'] ?></p>
                </div>
                <div class="giaiphap-value">
                    <img class="giapphap-img" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcST6zgsJcV3niKkGVEnCYP-s6YIg55vp0Om0w&usqp=CAU" alt="">
                    <p ><?php echo $lang['hd'] ?></p>
                    <br>
                    <br>
                    <br>
                    <p><?php echo $lang['thhd'] ?></p>
                </div>
            </div>
        </div>
    </body>
    <footer>
        <div class="footer-container" >
            <div class="footer-txt" >
            <?php 
                while($row = mysqli_fetch_array($query_lietke_nx)){
            ?>
                <img style="height:70px;margin-left: 27px;"src="../admincp/modules/quanlylogo/uploads/<?php echo $row['hinhanh'] ?>" alt="logo">
            <?php 
                }
            ?>
                <div class="footer-value" >
                <div style="margin-left: 30px;margin-right: 50px;width: 26%;" >
                <?php 
                    while($row = mysqli_fetch_array($query_lietke_ft)){
                ?>
                    <p>
                        <?php echo $lang['vh'] ?>
                    </p>
                    <p class="lang" key="htkk">
                        <?php echo $row['tenct_'.$_SESSION['lang']] ?>
                    </p>
                    <br>
                    <br>
                    <p ><?php echo $row['chungnhan_'.$_SESSION['lang']] ?></p>
                    <br>
                    <br>
                    <p><?php echo $lang['diachi'] ?> <?php echo $row['diachi_'.$_SESSION['lang']] ?> </p>
                    <br>
                    <br>
                    <p>Phone: <?php echo $row['phone'] ?></p>
                    <br>
                    <p>Email: <?php echo $row['email'] ?></p>
                    <br>
                    <?php 
                    }
                    ?>
                    <p><?php echo $lang['tud'] ?></p>
                    <p><?php echo $lang['qcao'] ?></p>
                </div>
                <div class="tinmoi">
                    <p><?php echo $lang['newsd'] ?></p>
                    <br>
                    <marquee direction="up" scrollamount="3">
                        <?php 
                            while($row = mysqli_fetch_array($query_lietke_nd_ttft)){
                        ?>
                        <p direction="up" class="nd-tintuc" >
                            <?php 
                                    echo $row['chitiet_'.$_SESSION['lang']] ;
                            ?>
                        </p>
                        <?php }?>
                    </marquee>
                    <br>
                    <br>
                    <br>
                    <p><?php echo $lang['theodoi'] ?></p>
                </div>
                <div class="footer-balance" >
                    <p><?php echo $lang['chsoc'] ?></p>
                    <br>
                    <br>
                    <a><?php echo $lang['trgiup'] ?></a>
                    <br>
                    <a><?php echo $lang['hdtk'] ?></a>
                    <br>
                    <a><?php echo $lang['trhang'] ?></a>
                    <br>
                    <a><?php echo $lang['chthgap'] ?></a>
                </div>
                <div>
                    <p><?php echo $lang['lienhe'] ?></p>
                    <br>
                    <br>
                    <a><?php echo $lang['vpmb'] ?></a>
                    <p><?php echo $lang['vpmn'] ?></p>
                </div>
            </div>
            </div>
            <div class="copyright" >
                <div class="copy-text">
                   <div style="display:flex" >
                        &copy <p><?php echo $lang['copyright'] ?></p>
                   </div>
                <p><?php echo $lang['mota'] ?></p>
                </div>
                <div class="BCT" >
                <img src="../img/thongbaoBCT.png" class="img-BCT" alt="logo BCT">
                </div>
            </div>
        </div>
    </footer>
    
</body>
</html>

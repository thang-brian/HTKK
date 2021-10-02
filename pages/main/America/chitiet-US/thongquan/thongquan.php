<?php 
    session_start();
    include("../../../../../admincp/config/config.php");
    include('../../../../../language/lang_config.php');
    $sql_nenxanh1 = "SELECT * FROM logo WHERE style = 1 ORDER BY id DESC";
	$query_lietke_nx1 = mysqli_query($mysqli,$sql_nenxanh1);
    $sql_nenxanh = "SELECT * FROM logo WHERE style = 1 ORDER BY id DESC";
	$query_lietke_nx = mysqli_query($mysqli,$sql_nenxanh);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../../../css/thongquan.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
    <title>HTKK | Thông quan hàng hóa</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script language="javascript" src="../../../../../language/tq.js"></script>
</head>
<body>
    <div class="header" >
    <div class="header-bottom">
                <?php 
                    while($row = mysqli_fetch_array($query_lietke_nx1)){
                ?>
                <img style="width: 175px;padding-top: 32px;" src="../../../../../admincp/modules/quanlylogo/uploads/<?php echo $row['hinhanh'] ?>" alt="Logo">
                <?php }?>
                <nav>
                    <li class="logo">
                        <a href="../../vc-US.php"><?php echo $lang['home'] ?></a>
                    </li>
                    <li>
                        <a href="#" ><?php echo $lang['gthieu'] ?></a>
                    </li>
                    <li>
                        <a href="#"><?php echo $lang['dvu'] ?></a>
                    </li>
                    <li>
                        <a href="#"><?php echo $lang['tintuc'] ?></a>
                    </li>
                    <li>
                        <a href="#"><?php echo $lang['lienhe'] ?></a>
                    </li>
                </nav>
    </div>
    <div>
        <header>
            <p id="link-background-value"><?php echo $lang['home'] ?></p>
            <i id="link-background-value" class="fas fa-greater-than"></i>
            <p id="link-background-value" ><?php echo $lang['hdan'] ?></p>
        </header>
    </div>
    <div class="main">
    <div class="introduction2" >
        <div>
            <h4 class="tieude"><?php echo $lang['thutuc'] ?></h4>
            <p class="tieude-txt">
                Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut 
                laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation 
                ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in 
                hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros 
                et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. 
            </p>
            <button class="btn"><?php echo $lang['xemt'] ?></button>
        </div>
        <h4 class="tieude2"><?php echo $lang['dvtquan'] ?></h4>
        <div class="dvthongquan">
            <img src="../../../../../img/dvthongquan.png" alt="logo" >
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod 
                tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper 
                suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit 
                esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at 
                vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril 
                delenit augue duis dolore te feugait nulla facilisi. </p>
        </div>
        <h4 class="tieude2"><?php echo $lang['dvtdien'] ?></h4>
        <div class="toandien" >
            <div class="toandien-value">
                <img src="../../../../../img/khaibaohq.png" alt="">
                <p class="toandien-td lang" key="kbhquan">KHAI BÁO HẢI QUAN</p>
                <p class="toandien-txt">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt .</p>
            </div>
            <div class="toandien-value">
                <img src="../../../../../img/vtduongbien.png" alt="">
                <p class="toandien-td lang" key="vtbien">VẬN TẢI ĐƯỜNG BIỂN</p>
                <p class="toandien-txt">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt .</p>
            </div>
            <div class="toandien-value">
                <img src="../../../../../img/vtduongbo.png" alt="">
                <p class="toandien-td lang" key="vtbo">VẬN TẢI ĐƯỜNG BỘ</p>
                <p class="toandien-txt">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt .</p>
            </div>
            <div class="toandien-value">
                <img src="../../../../../img/vthangkhong.png" alt="">
                <p class="toandien-td lang" key="vtkhong">VẬN TẢI HÀNG KHÔNG</p>
                <p class="toandien-txt">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt .</p>
            </div>
            <div class="toandien-value">
                <img src="../../../../../img/cpnhanh.png" alt="">
                <p class="toandien-td lang" key="cpqt">CHUYỂN PHÁT NHANH QUỐC TẾ</p>
                <p class="toandien-txt">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt .</p>
            </div>
        </div>
        <div class="tieude-4" >
        <h4 class="tieude2"><?php echo $lang['tintuc'] ?></h4>
        <h4 class="tieude2"><?php echo $lang['cauhoi'] ?></h4>
        </div>
        <div class="tieude-4txt">
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet 
                dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit 
                lobortis nisl ut aliquip ex ea commodo consequat. 
            </p>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet 
                dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit 
                lobortis nisl ut aliquip ex ea commodo consequat. 
            </p>
        </div>
    </div>
    <div class="lq" >
                <div class="b-bvlq">
                    <p class="tieude-lq"><?php echo $lang['dvctoi'] ?></p>
                    <p class="lang" key="kbhquan">Khai báo Hải Quan</p>
                    <br>
                    <p class="lang" key="vtbien">Vận tải đường biển</p>
                    <br>
                    <p class="lang" key="vtbo">Vận tải hàng không</p>
                    <br>
                    <p class="lang" key="vtkhong">Vận tải đường bộ</p>
                    <br>
                    <p class="lang" key="cpqt">Chuyển phát nhanh quốc tế</p>
                </div>
                <div class="b-bvlq">
                    <p class="tieude-lq"><?php echo $lang['baiviet'] ?></p>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, 
                        sed diam nonummy nibh euismod tincidunt .
                    </p>
                </div>
        </div>
    </div>
    </div>
    <footer style="margin-top: 10px; " >
    <div class="footer-menu">
        <div>
        <?php 
             while($row = mysqli_fetch_array($query_lietke_nx)){
        ?>
        <img style="width: 175px;padding-left: 40px;" src="../../../../../admincp/modules/quanlylogo/uploads/<?php echo $row['hinhanh'] ?>" alt="Logo">
        <?php }?>
        </div>
            <div class="footer-menu1">
                <p><?php echo $lang['dvu'] ?> </p>
                <p><?php echo $lang['lienket'] ?></p>
                <p><?php echo $lang['ttlienhe'] ?></p>
            </div>
        </div>
        <div class="footer-menu">
            <p class="footer-txt1 lang" key="p" >
            Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt .
            </p>
            <div class="footer-txt">
            <a href="" class="lang" key="kbhquan">Khai báo Hải Quan</a>
            <a href="" class="lang" key="vtbien">Vận tải đường biển</a>
            <a href="" class="lang" key="vtbo">Vận tải hàng không</a>
            <a href="" class="lang" key="vtkhong">Vận tải đường bộ</a>
            <a href="" class="lang" key="cpqt">Chuyển phát nhanh quốc tế</a>
            </div>
            <div class="footer-txt">
            <a href="../../vc-US.php"><?php echo $lang['home'] ?> </a>
            <a href=""><?php echo $lang['gthieu'] ?> </a>
            <a href="" ><?php echo $lang['dvu'] ?> </a>
            <a href=""><?php echo $lang['tintuc'] ?> </a>
            <a href=""><?php echo $lang['lienhe'] ?> </a>
            </div>
            <p class="footer-txt3 lang" key="p" >
            Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud 
            </p>
        </div>
</footer>
</body>
</html>
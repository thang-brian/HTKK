<footer style="margin-top: 10px; " >
<div class="footer-menu">
        <div>
        <?php 
           while($row = mysqli_fetch_array($query_lietke_nx1)){
        ?>
            <img style="width: 175px;padding-left: 40px;" src="../../../../admincp/modules/quanlylogo/uploads/<?php echo $row['hinhanh'] ?>" alt="Logo">
        <?php 
           }
        ?>
        </div>
            <div class="footer-menu1">
                <p><?php echo $lang['httk'] ?></p>
                <p><?php echo $lang['cskh'] ?></p>
                <p><?php echo $lang['ttlienhe'] ?></p>
            </div>
        </div>
        <div class="footer-menu">
            <p class="footer-txt1 " >
            Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt .
            </p>
            <p class="footer-txt " >
            Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud 
            </p>
            <div class="footer-txtcs">
                <p class="lang" key="tttgiup">Trung tâm trợ giúp</p>
                <p class="lang" key="hdtaotk">Hướng dẫn tạo tài khoản</p>
                <p class="lang" key="hdmuah">Hướng dẫn mua hàng</p>
                <p class="lang" key="trahvc">Trả hàng & vận chuyển</p>
                <p class="lang" key="cauhoi">Các câu hỏi thường gặp</p>
            </div>
            <p class="footer-txt ">
            Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud 
            </p>
        </div>
        
</footer>
<div class="header" >
    <div class="header-bottom">
            <?php 
                while($row = mysqli_fetch_array($query_lietke_nx)){
            ?>    
            <img style="width: 15%;height: 20%;padding-top: 32px;" src="../../../../admincp/modules/quanlylogo/uploads/<?php echo $row['hinhanh'] ?>" alt="Logo">
            <?php 
                }
            ?> 
            <nav>
                    <li class="logo">
                        <a href="../vc-US.php"><i style="color:white" class="fas fa-home"></i></a>
                    </li>
                    <li>
                        <a href="#" ><?php echo $lang['bg'] ?></a>
                    </li>
                    <li>
                        <a href="#"><?php echo $lang['hdan'] ?></a>
                    </li>
                    <li>
                        <a href="#"><?php echo $lang['csach'] ?></a>
                    </li>
                    <li>
                        <a href="#"><?php echo $lang['tintuc'] ?></a>
                    </li>
                </nav>
            </div>
</div>
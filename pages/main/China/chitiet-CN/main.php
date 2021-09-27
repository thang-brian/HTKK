<div class="maincontent">
				<?php
				if(isset($_GET['quanly'])){
					$tam = $_GET['quanly'];
				}else{
					$tam = '';
				}
				if($tam=='banggia'){
					include("../chitiet-CN/banggia/banggia.php");
				}elseif($tam=='chuyentien'){
					include("../chitiet-CN/chuyentien/chuyentien.php");
				}else{
					include("../vc-china.php");
				}
				?>
			</div>
<div class="maincontent">
				<?php
				if(isset($_GET['quanly'])){
					$tam = $_GET['quanly'];
				}else{
					$tam = '';
				}
				if($tam=='banggia'){
					include("../chitiet-US/banggia/banggia.php");
				}elseif($tam=='chuyentien'){
					include("../chitiet-US/chuyentien/chuyentien.php");
				}else{
					include("../vc-US.php");
				}
				?>
			</div>
<div class="maincontent">
				<?php
				if(isset($_GET['quanly'])){
					$tam = $_GET['quanly'];
				}else{
					$tam = '';
				}
				if($tam=='banggia'){
					include("../chitiet-KR/banggia/banggia.php");
				}elseif($tam=='chuyentien'){
					include("../chitiet-KR/chuyentien/chuyentien.php");
				}else{
					include("../vc-US.php");
				}
				?>
			</div>
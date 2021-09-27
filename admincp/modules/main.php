<div class="main">

	<?php

				if(isset($_GET['action']) && $_GET['query']){
					$tam = $_GET['action'];
					$query = $_GET['query'];
				}else{
					$tam = '';
					$query = '';
				}
				if($tam=='quanlylogo' && $query=='lietke'){
					include("modules/quanlylogo/lietke.php");
				}else if($tam=='quanlylogo' && $query=='them'){
					include("modules/quanlylogo/them.php");
				}else if($tam=='quanlylogo' && $query=='sua'){
					include("modules/quanlylogo/sua.php");
				}else if($tam=='quanlydv' && $query=='lietke'){
					include("modules/quanlydv/lietke.php");
				}else if($tam=='quanlydv' && $query=='them'){
					include("modules/quanlydv/them.php");
				}elseif ($tam=='quanlydv' && $query=='sua') {
					include("modules/quanlydv/sua.php");
				}elseif ($tam=='quanlynd' && $query=='lietke') {
					include("modules/quanlynd/lietke.php");
				}elseif($tam=='quanlynd' && $query=='them'){
					include("modules/quanlynd/them.php");
				}elseif($tam=='quanlynd' && $query=='sua'){
					include("modules/quanlynd/sua.php");
				}elseif($tam=='quanlydt' && $query=='lietke'){
					include("modules/quanlydt/lietke.php");
				}elseif($tam=='quanlydt' && $query=='them'){
					include("modules/quanlydt/them.php");
				}elseif($tam=='quanlydt' && $query=='sua'){
					include("modules/quanlydt/sua.php");
				}elseif($tam=='quanlyft' && $query=='lietke'){
					include("modules/quanlyfooter/lietke.php");
				}elseif($tam=='quanlyft' && $query=='them'){
					include("modules/quanlyfooter/them.php");
				}elseif($tam=='quanlyft' && $query=='sua'){
					include("modules/quanlyfooter/sua.php");
				}elseif($tam=='quanlygt' && $query=='lietke'){
					include("modules/quanlygt/lietke.php");
				}elseif($tam=='quanlygt' && $query=='sua'){
					include("modules/quanlygt/sua.php");
				}else if($tam=='quanlydvvc' && $query=='lietke'){
					include("modules/quanlydv-vc/lietke.php");
				}else if($tam=='quanlydvvc' && $query=='them'){
					include("modules/quanlydv-vc/them.php");
				}elseif ($tam=='quanlydvvc' && $query=='sua') {
					include("modules/quanlydv-vc/sua.php");
				}else if($tam=='quanlykbvc' && $query=='lietke'){
					include("modules/quanlykb-vc/lietke.php");
				}else if($tam=='quanlykbvc' && $query=='them'){
					include("modules/quanlykb-vc/them.php");
				}elseif ($tam=='quanlykbvc' && $query=='sua') {
					include("modules/quanlykb-vc/sua.php");
				}else if($tam=='quanlybgvc' && $query=='lietke'){
					include("modules/quanlybg-vc/lietke.php");
				}else if($tam=='quanlybgvc' && $query=='them'){
					include("modules/quanlybg-vc/them.php");
				}elseif ($tam=='quanlybgvc' && $query=='sua') {
					include("modules/quanlybg-vc/sua.php");
				}else if($tam=='quanlyttvc' && $query=='lietke'){
					include("modules/quanlytt-vc/lietke.php");
				}else if($tam=='quanlyttvc' && $query=='them'){
					include("modules/quanlytt-vc/them.php");
				}elseif ($tam=='quanlyttvc' && $query=='sua') {
					include("modules/quanlytt-vc/sua.php");
				}
				else{
					include("modules/dashboard.php");
				}
	?> 
	
</div>
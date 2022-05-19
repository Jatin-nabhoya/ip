	<nav class="navbar navbar-expand-lg navbar-dark bg-primary bg-info" style="width:100%;position:absolute;bottom:0;">
		<span style="float:right;color:white"><b>Total visit from this browser is  : 
			<?php 
				if(isset($_COOKIE['totalvisit'])){
					echo $_COOKIE['totalvisit'];
				}else{
					setcookie("totalvisit","0",time()+60*60*24*365);
					echo 2;
				} ?>
		</b></span>
	</nav>
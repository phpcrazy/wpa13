
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8"> 
	<title>WPA13 - Log In</title>
	<link rel="stylesheet" href="css/import.css">
	<link rel="stylesheet" href="css/bootstrap/bootstrap-form.css">

	<!-- For Language Bar -->
	<script type="text/javascript" src="js/jquery-1.7.2.js"></script>
	<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
	<script type="text/javascript" src="js/jquery.hoverIntent.js"></script>

	<!-- For Menu -->	
	<!--<script type="text/javascript" src="js/jquery-1.8.0.js"></script>-->
	<link rel="stylesheet" type="text/css" href="css/bootstrap/jquery.dropdown.css">
	<script type="text/javascript" src="js/bootstrap/jquery.dropdown.js"></script>
	
	
	<!-- For Account -->	
	<link rel="stylesheet" type="text/css" href="css/bootstrap/jquery.dropdown.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap/metro.css">
	<script type="text/javascript" src="js/bootstrap/jquery.easydropdown.min.js"></script>
	
	

	<!--[if lt IE 7]>
		<style type="text/css">
		#wrapper { height:100%; }
		</style>
		<![endif]-->
	</head>
	<body>
		<div id="wrapper">
			<!--start header-->
			<?php
				include_once('inc.header.php');
			?>
			<!--end header-->
			<!--start language bar-->
			<?php
				include_once('inc.lang.php');
			?>
			<!--end language bar-->
			<!--start content-->
			<div id="content-login">
				<!--start panel-->
				<div class="rounded-corners" id="login-form">
					<form action="admin/index.php">
						<h3 class="hdr">log in</h3>
						<span class="lbl">email</span>
						<input class="input-xlarge" type="text" placeholder="yourname@mail.com*">
						<label>password</label>
						<input class="input-xlarge" type="password">	
						<br>					
						<p><button type="submit" class="btn" id="flip">login</button></p>
					</form>
				</div>
				<!--end panel-->

			</div>
			<!--end content-->			
		</div>	

			<!--start footer-->
			<?php
				include_once('inc.footer.php');
			?>
			<!--end footer-->
			<!-- Common javascript file -->
			<script src="js/common.js"></script>


	</body>
	</html>
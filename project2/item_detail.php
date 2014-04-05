
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8"> 
	<title>ピョーカッジン - ITEMS DETAILS</title>
	<link rel="stylesheet" href="css/import.css">	
	<link rel="stylesheet" href="css/bootstrap/bootstrap-form.css">

	<!-- For Language Bar -->
	<script type="text/javascript" src="js/jquery-1.8.3.js"></script>
	<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
	<script type="text/javascript" src="js/jquery.hoverIntent.js"></script>

	<!-- For Menu -->	
	<!--<script type="text/javascript" src="js/jquery-1.8.0.js"></script>-->
	<link rel="stylesheet" type="text/css" href="css/bootstrap/jquery.dropdown.css">
	<script type="text/javascript" src="js/bootstrap/jquery.dropdown.js"></script>
	
	<!-- For Account -->	
	<link rel="stylesheet" type="text/css" href="css/bootstrap/jquery.dropdown.css">
	<script type="text/javascript" src="js/bootstrap/jquery.easydropdown.min.js"></script>
		
	<!-- For tabs -->	
	<script type="text/javascript" src="js/bootstrap/bootstrap-tab.js"></script>

	<!-- For Zoom Image -->	
	<link rel="stylesheet" type="text/css" href="css/zoom/cloudzoom.css" />
    <script type="text/javascript" src="js/zoom/cloudzoom.js"></script>
	


	<!-- For image swapping -->		
	<script type="text/javascript">

	CloudZoom.quickStart();

		$(document).ready(function() {	

			//for image click
			path='images/item/large/';

			$('#img1').click(function(){					
					$('#imgPhoto').attr('src', path +'nik20054gry_01.jpg');
					$('#imgPhoto').attr('data-cloudzoom', 'zoomImage:"' + path + 'nik20054gry_01_large.jpg"');
					
					return false;
			});

			$('#img2').click(function(){
					$('#imgPhoto').attr('src', path +'nik20054gry_02.jpg');
					$('#imgPhoto').attr('data-cloudzoom', 'zoomImage:"' + path + 'nik20054gry_02_large.jpg"');
					return false;
			});

			$('#img3').click(function(){
					$('#imgPhoto').attr('src', path +'nik20054gry_03.jpg');
					$('#imgPhoto').attr('data-cloudzoom', "zoomImage: 'images/item/large/nik20054gry_03_large.jpg'");
					return false;
			});

			$('#img4').click(function(){
					$('#imgPhoto').attr('src', path +'nik20054gry_04.jpg');
					$('#imgPhoto').attr('data-cloudzoom', "zoomImage: 'images/item/large/nik20054gry_04_large.jpg'");
					return false;
			});


		});

	</script>

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
			<div id="content">					
				<p> > footwear > Nike </p>	

				<div class="detail-wrapper">
					<div class="img-wrapper">
						<table>							
							<tr>
								<td>
								<a id="img1" href="images/item/large/nik20054gry_01.jpg">
									<img src="images/item/thumbs/nik20054gry_01.jpg">
								</a>
								</td>
								<td rowspan="4">						
									<img id="imgPhoto" class="cloudzoom margin-5" 
									src="images/item/large/nik20054gry_01.jpg" 
             						data-cloudzoom = "zoomImage: 'images/item/large/nik20054gry_01_large.jpg'">
								</td>
							</tr>
							<tr>
								<td>
								<a id="img2" href="images/item/large/nik20054gry_02.jpg">
									<img src="images/item/thumbs/nik20054gry_02.jpg"></a>
								</td>

							</tr>
							<tr>
								<td>
								<a id="img3" href="images/item/large/nik20054gry_03.jpg">
									<img src="images/item/thumbs/nik20054gry_03.jpg"></a>
								</td>
							</tr>
							<tr>
								<td>
								<a id="img4" href="images/item/large/nik20054gry_04.jpg">
									<img src="images/item/thumbs/nik20054gry_04.jpg"></a>
								</td>
							</tr>
							
						</table>
					</div>
					<div class="data-wrapper">
						
						<div class="data-lft">
							<p class="upper size-l">Nike</p>
							<p class="upper size-m">Men’s Grey Berwuda Mid QS Sneakers</p>
							<p class="upper size-s">#nik20054gry</p>
							<p>£80.00</p>
						</div>							
						

						<div class="desp" id="add2basket-form">
							<form >
							<select>
								<option>1</option>
								<option>2</option>
							</select>
							<button type="button" class="btn">add to basket</button>
							</form>
						</div>

						<div class="data-rgt">
							<div class="tabbable"> <!-- Only required for left/right tabs -->
							    <ul class="nav nav-tabs">
								    <li class="active"><a href="#tab1" data-toggle="tab">about</a></li>
								    <li><a href="#tab2" data-toggle="tab">delivery</a></li>
							    </ul>
							    <div class="tab-content">
								    <div class="tab-pane active schide-items" id="tab1">
								    	<div class="pleft-ctn-items">
								    		The Nike Men’s Berwuda Mid QS Sneakers, seen here in grey and red.
											<br>Nike update the Berwuda Mid QS for 2014 and it is a modern interpretation of the running shoe that was originally released in 1979. A limited edition design, it combines a mixed construction on the uppers with an updated silhouette and a two-tone colour scheme.
											<br>
											<br>-  Leather, suede, engineered mesh and taped uppers
											<br>-  Shock-absorbing, Air-cushioned sole units
											<br>-  Padded cuffs for comfort
											<br>-  Toe counters
											<br>-  Unique tongue design
											<br>-  Waffle outsoles
											<br>
											<br>Made from leather, suede, engineered mesh.
											<br>
											<br>These sneakers fit to size.
										</div>
								    </div>

								    <div class="tab-pane schide-items" id="tab2">
								    	<div class="pleft-ctn-items">
								    		Howdy, I'm in Section 2.
											<br>Nike update the Berwuda Mid QS for 2014 and it is a modern interpretation of the running shoe that was originally released in 1979. A limited edition design, it combines a mixed construction on the uppers with an updated silhouette and a two-tone colour scheme.
											<br>
											<br>-  Leather, suede, engineered mesh and taped uppers
											<br>-  Shock-absorbing, Air-cushioned sole units
											<br>-  Padded cuffs for comfort
											<br>-  Toe counters
											<br>-  Unique tongue design
											<br>-  Waffle outsoles
											<br>
											<br>Made from leather, suede, engineered mesh.
											<br>
											<br>These sneakers fit to size.
										</div>

								    </div>
							    </div>
						    </div>	
						</div>

						<div class="adv">
							<p>Free worldwide delivery available</p>						
						</div>

					</div>
				</div>							
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
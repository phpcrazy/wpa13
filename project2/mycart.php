
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8"> 
	<title>ピョーカッジン - ITEMS</title>
	<link rel="stylesheet" href="css/import.css">
	<link rel="stylesheet" href="css/bootstrap/bootstrap-form.css">

	<!-- For Language Bar -->
	<script type="text/javascript" src="js/jquery-1.7.2.js"></script>
	<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
	<script type="text/javascript" src="js/jquery.hoverIntent.js"></script>

	<!-- For Menu -->	
	<!-- For Menu -->	
	<!--<script type="text/javascript" src="js/jquery-1.8.0.js"></script>-->
	<link rel="stylesheet" type="text/css" href="css/bootstrap/jquery.dropdown.css">
	<script type="text/javascript" src="js/bootstrap/jquery.dropdown.js"></script>
	
	<!-- For Account -->	
	<link rel="stylesheet" type="text/css" href="css/bootstrap/jquery.dropdown.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap/metro.css">
	<script type="text/javascript" src="js/bootstrap/jquery.easydropdown.min.js"></script>
		
	<!-- start for flyout -->
	<script type="text/javascript" language="javascript">

	$(document).ready(function(){
		path='<?php echo IMG;?>/item/mid/';

		 $("#imgsrc")
        .mouseover(function() { 
            $('#imgsrc').attr('src', path +'nik20054gry_03.jpg');
           
        })
        .mouseout(function() {
            $('#imgsrc').attr('src', path +'nik20054gry_01.jpg');
        });

	});

		

	</script>
	<!-- end for flyout -->

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
					<p class="cart-title">Currently In Your Shopping Cart</p>	
						<div id="mycart-form">
							<form action="#">	
							<table class="tbl-list">
								<tr class="tbl-header">
									<th><span>Your Item</span></th>
									<th>Item Price</th>
									<th>Quantity</th>
									<th>Price</th>
									<th>Remove</th>
								</tr>
								<tr class='hover'>
									<td>
										<div id="img-side">
											<a href="#"><img src="images/item/thumbs/nik20054gry_02.jpg"></a>
										</div>
										<div>
											<p><a href="3">Beach Riot Colada Bottom</a></p>
											<p>SKU: #8277050</p>
											<p>Color: South Beach</p>
											<p>size: XS</p>
										</div id="data-side">								
									</td>
									<td>$65.00</td>
									<td>
										<input type="text" value="1" class="width10">
									</td>
									<td>$65.00</td>
									<td><a href="#">Remove</a></td>
								</tr>
								<tr class='hover'>
									<td>
										<div id="img-side">
											<a href="#"><img src="images/item/thumbs/nik20054gry_02.jpg"></a>
										</div>
										<div>
											<p><a href="3">Beach Riot Colada Bottom</a></p>
											<p>SKU: #8277050</p>
											<p>Color: South Beach</p>
											<p>size: XS</p>
										</div id="data-side">								
									</td>
									<td>$65.00</td>
									<td>
										<input type="text" value="1" class="width10">
									</td>
									<td>$65.00</td>
									<td><a href="#">Remove</a></td>
								</tr>
								<tr class='hover'>
									<td>
										<div id="img-side">
											<a href="#"><img src="images/item/thumbs/nik20054gry_02.jpg"></a>
										</div>
										<div>
											<p><a href="3">Beach Riot Colada Bottom</a></p>
											<p>SKU: #8277050</p>
											<p>Color: South Beach</p>
											<p>size: XS</p>
										</div id="data-side">								
									</td>
									<td>$65.00</td>
									<td>
										<input type="text" value="1" class="width10">
									</td>
									<td>$65.00</td>
									<td><a href="#">Remove</a></td>
								</tr>
								<tr class="tbl-footer">
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>Grand Total&nbsp;:</td>
									<td>$25.00</td>
								</tr>						
							</table>
							<p><button type="submit" class="btn" id="flip">Continue Shopping</button>
							   <button type="submit" class="btn" id="flip">Proceed to Check Out</button>
							</p>
						</form>	
					
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

		<script>
			$(document).ready(function() {
				var selP = $(".selP");
				var selC = $(".selC");
				
				selP.change(function() {
					if($(this).is(":checked")) {
						$(this).prop("checked", true);
						selC.parent().parent().addClass("hover-sel");
						selC.prop("checked", true);
					}else {
						$(this).prop("checked", false);
						selC.parent().parent().removeClass("hover-sel");
						selC.prop("checked", false);
					}
				})		
				
				
				rowCheck(".hover");
			});
		</script>


	</body>
	</html>
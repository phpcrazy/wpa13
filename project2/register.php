
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8"> 
	<title>ピョーカッジン - Register</title>
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

		
	<!-- start for flyout -->
	<script type="text/javascript" language="javascript">

		$(document).ready(function() {		
			$("#regbtn").click(function(){
			    	$('.reg-hdr').css({ 'display': 'none'});
			    	$('#register-form').css({ 'height': '460px'});
					$('.info').css({ 'height': '320px'});

			    	$(".reg-content").fadeIn("9000");			    
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
			<div id="content-register">				
				

				<!--start register panel-->
				<div class="rounded-corners" id="register-form">

									
						<div class="reg-hdr">
							<h3 class="hdr small">register</h3>
							<span>Creating an account with us is quick and easy, and will allow you to simply access your details when you return to the site. You can add multiple delivery addresses, track your order and much more.</span>
						</div>


						<form>
						<!-- start reg-content-->												
						<div class="reg-content schide">							
								<h3 class="hdr small">new customers</h3>
								<!-- start info-->
								<div class="info pleft-ctn">																
								<table>									
									<tr>
										<td><span>Your Full Name</span></td>
										<td><input type="text" placeholder="yourname">*</td>
									</tr>
									<tr>
										<td><span>Email Address</span></td>
										<td><input type="text" placeholder="yourname@mail.com">*</td>
									</tr>
									<tr>
										<td><span>Password</span></td>
										<td><input type="password" placeholder="">*</td>
									</tr>
									<tr>
										<td><span>Confirm Password</span></td>
										<td><input type="password" placeholder="">*</td>
									</tr>
									<tr class="bdr">
										<td colspan="2"><span class="sub-hdr"><br>Billing Address:</span></td>
									</tr>
									<tr>
										<td colspan="2"><span class="sub-hdr"><br></td>
									</tr>
									<tr>
										<td><span>House Name / Number</span></td>
										<td><input type="text" placeholder="House Name / Num">*</td>
									</tr>
									<tr>
										<td><span>Address 1</span></td>
										<td> 
											<textarea rows="3" class="input-xlarge" type="text" placeholder="Address 1"></textarea>*
										</td>
									</tr>
									<tr>
										<td><span>Address 2</span></td>
										<td> 
											<textarea rows="3" class="input-xlarge" type="text" placeholder="Address 2"></textarea>
										</td>
									</tr>
									<tr>
										<td><span>Town / City</span></td>
										<td><input type="text" placeholder="Town / City">*</td>
									</tr>
									<tr>
										<td><span>Country</span></td>
										<td><input type="text" placeholder="Country"></td>
									</tr>

									<tr>
										<td><span>Country</span></td>
										<td>
											<select>
												<option value="">Myanmar</option>
												<option value="">Japan</option>
											</select>*
										</td>
									</tr>
									<tr>
										<td><span>Postcode</span></td>
										<td><input type="text" placeholder="Postcode">*</td>
									</tr>
									<tr>
										<td><span>Telephone No.</span></td>
										<td><input type="text" placeholder="Telephone No.">*</td>
									</tr>
									
									<tr>
										<td colspan="2">						
												<input type="checkbox" value="">
												Join email newsletter - Be Informed of new stock, sales etc.
										</td>	
									</tr>								
									<tr>
										<td colspan="2">						
												<input type="checkbox" value="">
												I have read and accepted the Terms & Conditions
										</td>
									</tr>
								</table>
								</div>	
								<!-- end info-->					
							
						</div>
						<!-- end reg-content-->
						<p><button type="button" class="btn" id="regbtn">register</button></p>
						</form>					
					
				</div>
				<!--end register panel-->
				<!--start login panel-->
				<div class="rounded-corners" id="login-form">
					<form>
						<h3 class="hdr small">log in</h3>

						<label>email</label>
						<input class="input-xlarge" type="text" placeholder="yourname@mail.com">*<br>
						<label>password</label>
						<input class="input-xlarge" type="password">	
						<br>						
						<p><button type="submit" class="btn">login</button></p>
					</form>
				</div>
				<!--end login panel-->

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
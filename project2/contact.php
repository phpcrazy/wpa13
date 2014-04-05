
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8"> 
	<title>ピョーカッジン - Contact</title>
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
	
	
	<!-- For left v-slider -->
    <script type="text/javascript" language="javascript" src="js/jcontent/jquery.jcontent.0.8.js"></script> 
    <link href="css/jcontent/jcontent.css" rel="stylesheet" type="text/css"/> 

    <script type="text/javascript" language="javascript">
        $("document").ready(function(){

                //left panel 
                $("div.lft").jContent({orientation: 'vertical', 
                   easing: "easeOutCirc", 
                   duration: 500,
                   auto: true,
                   pause_on_hover: true,
                   direction: 'prev',
                   pause: 1500});


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
			<div id="content-contact">		
				<!--start left panel-->
				<div class="lft">
					<div class="slides">
						<div>	
							<p class="title">Slide 1</p>
			            	<p class="txt">
			              	<img src="images/slides_v/1.jpg" border="0" alt="" title="" />
			          	</div>
			          	<div>	
							<p class="title">Slide 2</p>
			            	<p class="txt">
			              	<img src="images/slides_v/2.jpg" border="0" alt="" title="" />
			          	</div>
			          	<div>	
							<p class="title">Slide 3</p>
			            	<p class="txt">
			              	<img src="images/slides_v/3.jpg" border="0" alt="" title="" />
			          	</div>
			          	<div>	
							<p class="title">Slide 4</p>
			            	<p class="txt">
			              	<img src="images/slides_v/4.jpg" border="0" alt="" title="" />
			          	</div>
					</div>
				</div>
				<!--end left panel-->

				<!--start right panel-->
				<div class="rgt rounded-corners" id="contact-form">
					<form>
						<h3 class="hdr">Contact</h3>

						<table width="150px">
							<tr>									
								<td class="lbl">address</td>
								<td>:</td>
								<td>xxx</td>
							</tr>
							<tr>									
								<td class="lbl">phone</td>
								<td width="10px">:</td>
								<td>111-111-111</td>
							</tr>
						</table>

						<label>send a message</label>
						<input class="input-xlarge" type="text" placeholder="Name*">	<br>
						<input class="input-xlarge" type="text" placeholder="Email*">	<br>
						<input class="input-xlarge" type="text" placeholder="Phone">	<br>
						<textarea rows="5" class="input-xlarge" type="text" placeholder="Message*"></textarea>
						<br><br>							
						<button type="submit" class="btn">send</button>
					</form>
				</div>
				<!--end right panel-->

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
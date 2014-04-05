
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
	<!--<script type="text/javascript" src="js/jquery-1.8.0.js"></script>-->
	<link rel="stylesheet" type="text/css" href="css/bootstrap/jquery.dropdown.css">
	<script type="text/javascript" src="js/bootstrap/jquery.dropdown.js"></script>
	
	<!-- For Account -->	
	<link rel="stylesheet" type="text/css" href="css/bootstrap/jquery.dropdown.css">
	<script type="text/javascript" src="js/bootstrap/jquery.easydropdown.min.js"></script>


	<!-- start for flyout -->
	<script type="text/javascript" language="javascript">
	
	/*
		$(document).ready(function(){
			path='<?php echo IMG;?>/item/mid/';		

			 $(".imgsrc")
	        .mouseover(function() { 
	            $('.imgsrc').attr('src', path +'nik20054gry_03.jpg');
	           
	        })
	        .mouseout(function() {
	            $('.imgsrc').attr('src', path +'nik20054gry_01.jpg');
	        });

		});
	*/

	path='images/item/mid/';		

	function mouserover_img(src,img){
		document.getElementById(src).src=path + img;
	}
	function mouserout_img(src,img){
		document.getElementById(src).src=path + img;
	}
		

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
					<div id="filter">				
						<!--start pleft-ctn-->				
							<p class="title">FILTERS</p>
								<div id="filterpnl">
									<p class="title">clothings</p>										
									<table class="tbl-list0">
										<tr class='hover'>
											<td class="chk"><input type="checkbox" class="selC"/></td>
											<td>Shirts & Tops</td>													
										</tr>
										<tr class='hover'>
											<td class="chk"><input type="checkbox" class="selC"/></td>
											<td>Swimwear</td>													
										</tr>
										<tr class='hover'>
											<td class="chk"><input type="checkbox" class="selC"/></td>
											<td>Dresses</td>													
										</tr>
										<tr class='hover'>
											<td class="chk"><input type="checkbox" class="selC"/></td>
											<td>Swimwear</td>													
										</tr>
										<tr class='hover'>
											<td class="chk"><input type="checkbox" class="selC"/></td>
											<td>Coats & Outerwear</td>													
										</tr>
										<tr class='hover'>
											<td class="chk"><input type="checkbox" class="selC"/></td>
											<td>Jeans</td>													
										</tr>
										<tr class='hover'>
											<td class="chk"><input type="checkbox" class="selC"/></td>
											<td>Sweaters</td>													
										</tr>
										<tr class='hover'>
											<td class="chk"><input type="checkbox" class="selC"/></td>
											<td>Pants</td>													
										</tr>
										<tr class='hover'>
											<td class="chk"><input type="checkbox" class="selC"/></td>
											<td>Underwear & Intimates</td>													
										</tr>
									</table>	
							</div>

							<div id="filterpnl">
									<p class="title">brands</p>	
									<table class="tbl-list0">										
										<tr class='hover'>
											<td class="chk"><input type="checkbox" class="selC"/></td>
											<td>ABS Allen Schwartz</td>													
										</tr>
										<tr class='hover'>
											<td class="chk"><input type="checkbox" class="selC"/></td>
											<td>A Gold E</td>													
										</tr>
										<tr class='hover'>
											<td class="chk"><input type="checkbox" class="selC"/></td>
											<td>55DSL</td>													
										</tr>
										<tr class='hover'>
											<td class="chk"><input type="checkbox" class="selC"/></td>
											<td>525 america</td>													
										</tr>
										<tr class='hover'>
											<td class="chk"><input type="checkbox" class="selC"/></td>
											<td>2XU</td>													
										</tr>
									</table>									
							</div>
						
								
							<div class="filterpnl">
									<p class="title">speciality sizes</p>
									<table class="tbl-list0">										
										<tr class='hover'>
											<td class="chk"><input type="checkbox" class="selC"/></td>
											<td>S</td>													
										</tr>
										<tr class='hover'>
											<td class="chk"><input type="checkbox" class="selC"/></td>
											<td>M</td>													
										</tr>
										<tr class='hover'>
											<td class="chk"><input type="checkbox" class="selC"/></td>
											<td>L</td>													
										</tr>
										<tr class='hover'>
											<td class="chk"><input type="checkbox" class="selC"/></td>
											<td>XL</td>													
										</tr>
										<tr class='hover'>
											<td class="chk"><input type="checkbox" class="selC"/></td>
											<td>XXL</td>													
										</tr>
									</table>	
							</div>

							<div class="filterpnl">		
									<p class="title">colors</p>							
									<table class="tbl-list0">
										<tr class='hover'>
											<td class="chk"><input type="checkbox" class="selC"/></td>
											<td>white</td>													
										</tr>
										<tr class='hover'>
											<td class="chk"><input type="checkbox" class="selC"/></td>
											<td>multi</td>													
										</tr>
										<tr class='hover'>
											<td class="chk"><input type="checkbox" class="selC"/></td>
											<td>grey</td>													
										</tr>
										<tr class='hover'>
											<td class="chk"><input type="checkbox" class="selC"/></td>
											<td>blue</td>													
										</tr>
										<tr class='hover'>
											<td class="chk"><input type="checkbox" class="selC"/></td>
											<td>black</td>													
										</tr>
										<tr class='hover'>
											<td class="chk"><input type="checkbox" class="selC"/></td>
											<td>gold</td>													
										</tr>
										<tr class='hover'>
											<td class="chk"><input type="checkbox" class="selC"/></td>
											<td>pink</td>													
										</tr>
										<tr class='hover'>
											<td class="chk"><input type="checkbox" class="selC"/></td>
											<td>yellow</td>													
										</tr>
									</table>
							</div>


							<div class="filterpnl">
									<p class="title">prices</p>	
									<table class="tbl-list0">
										<tr class='hover'>
											<td class="chk"><input type="checkbox" class="selC"/></td>
											<td>Under $68.00</td>													
										</tr>
										<tr class='hover'>
											<td class="chk"><input type="checkbox" class="selC"/></td>
											<td>Between $68.00 and $975.00</td>													
										</tr>
										<tr class='hover'>
											<td class="chk"><input type="checkbox" class="selC"/></td>
											<td>Over $975.00</td>													
										</tr>
									</table>
							</div>


							<div class="filterpnl">
									<p class="title">materials</p>	
									<table class="tbl-list0">
										<tr class='hover'>
											<td class="chk"><input type="checkbox" class="selC"/></td>
											<td>platinum</td>													
										</tr>
										<tr class='hover'>
											<td class="chk"><input type="checkbox" class="selC"/></td>
											<td>gold</td>													
										</tr>
										<tr class='hover'>
											<td class="chk"><input type="checkbox" class="selC"/></td>
											<td>leather</td>													
										</tr>
										<tr class='hover'>
											<td class="chk"><input type="checkbox" class="selC"/></td>
											<td>mixed</td>													
										</tr>
										<tr class='hover'>
											<td class="chk"><input type="checkbox" class="selC"/></td>
											<td>metal</td>													
										</tr>
									</table>
							</div>	
					<!--end pleft-ctn-->
					</div>
					<div id="items">
						<!--start pright-ctn-->
							<p>
							Alphabetical Brand Index : 
							#· A· B· C· D· E· F· G· H· I· J· K· L· M· N· O· P· Q· R· S· T· U· V· W· X· Y· Z 
							</p>							

							<p>	Sort by : 
								<a href="#">New Arrival</a>   | 
								<a href="#">Best Seller</a>   | 
								<a href="#">Price</a>   | 
								<a href="#">Brand</a>  
							</p>

							<p class="paging"> 1 | 2 | 3 | 4 | 5 </p>
						
							<div class="item-box gray">
								<a href="item_detail.php" 
									onmouseover="mouserover_img('imgsrc0','nik20054gry_03.jpg')" 
									onmouseout="mouserout_img('imgsrc0','nik20054gry_01.jpg')">

									<img id="imgsrc0" src="images/item/mid/nik20054gry_01.jpg">
								</a>						
								<p>Nike</p>
								<p>Men’s Grey Berwuda Mid QS Sneakers</p>
								<p class="black bold">Now<span class="black big">£28.00</span></p>
								
								<a href="item_detail.php" class="bold">View Details ›</a> 

							</div>	

							<div class="item-box gray">
								<a href="item_detail.php" 
									onmouseover="mouserover_img('imgsrc1','nik20054gry_03.jpg')" 
									onmouseout="mouserout_img('imgsrc1','nik20054gry_01.jpg')">
									
									<img id="imgsrc1" src="images/item/mid/nik20054gry_01.jpg">
								</a>					
								<p>Nike</p>
								<p>Men’s Grey Berwuda Mid QS Sneakers</p>
								<p class="black bold">Now<span class="black big">£28.00</span></p>
								
								<a href="item_detail.php" class="bold">View Details ›</a> 

							</div>	

							<div class="item-box gray">
								<a href="item_detail.php" 
									onmouseover="mouserover_img('imgsrc2','nik20054gry_03.jpg')" 
									onmouseout="mouserout_img('imgsrc2','nik20054gry_01.jpg')">
									
									<img id="imgsrc2" src="images/item/mid/nik20054gry_01.jpg">
								</a>

								<p>Nike</p>
								<p>Men’s Grey Berwuda Mid QS Sneakers</p>
								<p class="black bold">Now<span class="black big">£28.00</span></p>
								
								<a href="item_detail.php" class="bold">View Details ›</a> 

							</div>	

							<div class="item-box gray">
								<a href="item_detail.php" 
									onmouseover="mouserover_img('imgsrc3','nik20054gry_03.jpg')" 
									onmouseout="mouserout_img('imgsrc3','nik20054gry_01.jpg')">
									
									<img id="imgsrc3" src="images/item/mid/nik20054gry_01.jpg">
								</a>

								<p>Nike</p>
								<p>Men’s Grey Berwuda Mid QS Sneakers</p>
								<p class="black bold">Now<span class="black big">£28.00</span></p>
								
								<a href="item_detail.php" class="bold">View Details ›</a> 

							</div>	

							<div class="item-box gray">
								<a href="item_detail.php" 
									onmouseover="mouserover_img('imgsrc4','nik20054gry_03.jpg')" 
									onmouseout="mouserout_img('imgsrc4','nik20054gry_01.jpg')">
									
									<img id="imgsrc4" src="images/item/mid/nik20054gry_01.jpg">
								</a>

								<p>Nike</p>
								<p>Men’s Grey Berwuda Mid QS Sneakers</p>
								<p class="black bold">Now<span class="black big">£28.00</span></p>
								
								<a href="item_detail.php" class="bold">View Details ›</a> 

							</div>	

							<div class="item-box gray">
								<a href="item_detail.php" 
									onmouseover="mouserover_img('imgsrc5','nik20054gry_03.jpg')" 
									onmouseout="mouserout_img('imgsrc5','nik20054gry_01.jpg')">
									
									<img id="imgsrc5" src="images/item/mid/nik20054gry_01.jpg">
								</a>

								<p>Nike</p>
								<p>Men’s Grey Berwuda Mid QS Sneakers</p>
								<p class="black bold">Now<span class="black big">£28.00</span></p>
								
								<a href="item_detail.php" class="bold">View Details ›</a> 

							</div>	

							<div class="item-box gray">
								<a href="item_detail.php" 
									onmouseover="mouserover_img('imgsrc6','nik20054gry_03.jpg')" 
									onmouseout="mouserout_img('imgsrc6','nik20054gry_01.jpg')">
									
									<img id="imgsrc6" src="images/item/mid/nik20054gry_01.jpg">
								</a>

								<p>Nike</p>
								<p>Men’s Grey Berwuda Mid QS Sneakers</p>
								<p class="black bold">Now<span class="black big">£28.00</span></p>
								
								<a href="item_detail.php" class="bold">View Details ›</a> 

							</div>	
					</div>
				<!--end pright-ctn-->				
			</div>
			<!--end content-->
		</div>	

		<!--start footer-->
		<?php
			include_once('inc.footer.php');
		?>
		<!--end footer-->
		<!-- Common javascript file -->
		<script src="<?php echo JS; ?>/common.js"></script>
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

				function rowCheck(row) {
						$(row).click(function() {
							if($(this).find("input:checkbox").is(":checked")) {
								$(this).find("input:checkbox").prop("checked", false);
								$(this).removeClass("hover-sel");
							}else {
								$(this).find("input:checkbox").prop("checked", true);
								$(this).addClass("hover-sel");
							}
						});
					}
				
				rowCheck(".hover");
			});
		</script>	

	</body>
	</html>
<?php load_view("layout/header");?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div id="home-slider" class="carousel slide" data-ride="carousel">
  		<!-- Indicators -->
  			<ol class="carousel-indicators">
    				<li data-target="#home-slider" data-slide-to="0" class="active"></li>
    				<li data-target="#home-slider" data-slide-to="1"></li>
    				<li data-target="#home-slider" data-slide-to="2"></li>
 			 </ol>
  			<!-- Wrapper for slides -->
			<div class="carousel-inner">
   				 <div class="item active">
      					<img class="slide-img" src="img/slide_1.jpg" alt="...">
      					<div class="carousel-caption">Fashion</div>
      				</div>
      				<div class="item">
      					<img class="slide-img" src="img/slide_2.jpg" alt="...">
      					<div class="carousel-caption">Fashion</div>
      				</div>
      				<div class="item">
      					<img class="slide-img" src="img/slide_3.jpg" alt="...">
      					<div class="carousel-caption">Fashion</div>
      				</div>
      			</div>
  		<!-- Controls -->
  			<a class="left carousel-control" id="carousel-control-left" href="#home-slider" data-slide="prev">
    				<span class="glyphicon glyphicon-chevron-left"></span>
  			</a>
  			<a class="right carousel-control" id="carousel-control-right" href="#home-slider" data-slide="next">
    				<span class="glyphicon glyphicon-chevron-right"></span>
  			</a>
	  </div>
	</div><!-- /.col-md-12 -->

	<div class="col-sm-4 col-xs-12 " >
        <a href="#">
		<div class="inner-img">
			<img class="img-responsive" src="img/man.jpg" />
		</div>
        </a>
	</div><!-- /.col-md-4 -->

	<div class="col-sm-4 col-xs-12 ">
        <a href="#">
		<div class="inner-img">
			<img class="img-responsive" src="img/woman.jpg" />
		</div>
        </a>
	</div><!-- /.col-md-4 -->

	<div class="col-sm-4 col-xs-12 ">
        <a href="#">
		<div class="inner-img">
			<img class="img-responsive" src="img/baby.jpg" />
		</div>
        </a>
	</div><!-- /.col-md-4 -->
      </div><!-- /.row -->
  </div><!-- /.container -->
    <script >var page="home";</script>
    <?php load_view("layout/footer"); ?>
    
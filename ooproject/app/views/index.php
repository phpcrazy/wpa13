<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.png">

    <title>Fashion</title>

    <!-- Bootstrap core CSS -->
    {{ HTML::style('css/bootstrap') }}
    <?php echo HTML::style('css/bootstrap'); ?>
    <link rel='stylesheet' href='css/bootstrap.css'>
	
    <!-- Custom styles for this template -->
    <link rel='stylesheet' href='css/MasterStyle.css'>
  </head>

  <body>
<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="home">Fashion</a>
    </div><!--end of .navbar-header -->
    <div class="collapse navbar-collapse">
    <ul class="nav navbar-nav  navbar-right">
        <li id="home"><a href="home">Home</a></li>
        <li id="about"><a href="about">About</a></li>
        <li id="contact"><a href="contact">Contact</a></li>
        <li class="hidden-xs">
          <form class="navbar-form navbar-right" role="search">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Search">
            </div>
            <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button>
    </form>
        </li>
        <li id="login"><a href="login" >Login/Register</a></li>
      </ul>
      
    </div><!--end of .navbar-collapse-->
    <div class="collapse navbar-collapse hidden-xs" >
      <ul class="nav navbar-nav">
          <li id="sale"><a  href="sale">Sale</a></li>
          <li><a href="new">New</a></li>
          <li><a href="brands">Brands</a></li>
          <li><a href="accessories">Accessories</a></li>
          <li><a href="footwear">Footwear</a></li>
          <li><a href="legwear">Legwear</a></li>
           <li><a href="outwear">Outwear</a></li>
           <li><a href="tops">Tops</a></li>
      </ul>
    </div><!--end of .navbar-collapse-->
  </div><!--end of .container-->
</div><!--end of .navbar--><div class="container">
	<div calss="row">
		<!--site menu-->
		<div class="col-md-3">
			<div class="panel panel-default">
  				<div class="panel-heading">
    					<h3 class="panel-title">Menu</h3>
  				</div>
  				<div class="panel-body">
    					<ul class="list-group">
  						<li class="list-group-item">Popular</li>
    						<li class="list-group-item">Most View</li>
    						<li class="list-group-item">Top Sale</li>
    					</ul>
  				</div>
			</div><!-- ./panel -->
</div><!-- ./col-md-3 -->		<!-- item area-->
		<div class="col-md-9"><div class="col-md-12 col-sm-12"><h1 class="page-header">sale <small>Everthing is here ....</small></h1><ul class="pagination pull-right"><li ><a href="#">&laquo;</a></li><li class="active"><a href="#">1 </a></li><li ><a href="#">2 </a></li><li ><a href="#">3 </a></li><li ><a href="#">&raquo;</a></li></ul></div><div class="col-md-4 col-sm-4 col-xs-12"><div class="fashion-item"><div class="item-body"><img class="img-responsive item-img" src="img/man.jpg" /></div><div class="item-footer"><p class="item-id">ID : 12334567 </p><p span class="item-price">Price : 12000ks </p><button type="button" class="btn btn-info ">Buy</button><button type="button" class="btn btn-info pull-right">Detail</button></div></div></div><!-- ./col-md-4--><div class="col-md-4 col-sm-4 col-xs-12"><div class="fashion-item"><div class="item-body"><img class="img-responsive item-img" src="img/man.jpg" /></div><div class="item-footer"><p class="item-id">ID : 12334567 </p><p span class="item-price">Price : 12000ks </p><button type="button" class="btn btn-info ">Buy</button><button type="button" class="btn btn-info pull-right">Detail</button></div></div></div><!-- ./col-md-4--><div class="col-md-4 col-sm-4 col-xs-12"><div class="fashion-item"><div class="item-body"><img class="img-responsive item-img" src="img/man.jpg" /></div><div class="item-footer"><p class="item-id">ID : 12334567 </p><p span class="item-price">Price : 12000ks </p><button type="button" class="btn btn-info ">Buy</button><button type="button" class="btn btn-info pull-right">Detail</button></div></div></div><!-- ./col-md-4--><div class="col-md-4 col-sm-4 col-xs-12"><div class="fashion-item"><div class="item-body"><img class="img-responsive item-img" src="img/man.jpg" /></div><div class="item-footer"><p class="item-id">ID : 12334567 </p><p span class="item-price">Price : 12000ks </p><button type="button" class="btn btn-info ">Buy</button><button type="button" class="btn btn-info pull-right">Detail</button></div></div></div><!-- ./col-md-4--><div class="col-md-4 col-sm-4 col-xs-12"><div class="fashion-item"><div class="item-body"><img class="img-responsive item-img" src="img/man.jpg" /></div><div class="item-footer"><p class="item-id">ID : 12334567 </p><p span class="item-price">Price : 12000ks </p><button type="button" class="btn btn-info ">Buy</button><button type="button" class="btn btn-info pull-right">Detail</button></div></div></div><!-- ./col-md-4--><div class="col-md-4 col-sm-4 col-xs-12"><div class="fashion-item"><div class="item-body"><img class="img-responsive item-img" src="img/man.jpg" /></div><div class="item-footer"><p class="item-id">ID : 12334567 </p><p span class="item-price">Price : 12000ks </p><button type="button" class="btn btn-info ">Buy</button><button type="button" class="btn btn-info pull-right">Detail</button></div></div></div><!-- ./col-md-4--><div class="col-md-4 col-sm-4 col-xs-12"><div class="fashion-item"><div class="item-body"><img class="img-responsive item-img" src="img/man.jpg" /></div><div class="item-footer"><p class="item-id">ID : 12334567 </p><p span class="item-price">Price : 12000ks </p><button type="button" class="btn btn-info ">Buy</button><button type="button" class="btn btn-info pull-right">Detail</button></div></div></div><!-- ./col-md-4--><div class="col-md-4 col-sm-4 col-xs-12"><div class="fashion-item"><div class="item-body"><img class="img-responsive item-img" src="img/man.jpg" /></div><div class="item-footer"><p class="item-id">ID : 12334567 </p><p span class="item-price">Price : 12000ks </p><button type="button" class="btn btn-info ">Buy</button><button type="button" class="btn btn-info pull-right">Detail</button></div></div></div><!-- ./col-md-4--><div class="col-md-4 col-sm-4 col-xs-12"><div class="fashion-item"><div class="item-body"><img class="img-responsive item-img" src="img/man.jpg" /></div><div class="item-footer"><p class="item-id">ID : 12334567 </p><p span class="item-price">Price : 12000ks </p><button type="button" class="btn btn-info ">Buy</button><button type="button" class="btn btn-info pull-right">Detail</button></div></div></div><!-- ./col-md-4--></div><!-- ./col-md-9 -->		</div><!-- ./row -->
</div><!-- ./container -->
<script>var page="sale";</script>
  <div class="container">
      <div class="row">
          <div class="col-md-12">
                <hr>
              <p class="lead" align="center">Copyright @ WPA-13</p>
            </div><!-- /.col-md-12 -->
      </div><!-- /.row -->
  </div><!-- /.container -->
    <script src='js/jquery.js'></script>
    <script src='js/bootstrap.min.js'></script>
    <script src='js/MasterScript.js'></script>
  </body>
</html>

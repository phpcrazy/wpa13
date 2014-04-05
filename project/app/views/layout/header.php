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
    <?php load_css("css/bootstrap"); ?>
	
    <!-- Custom styles for this template -->
    <?php load_css("css/MasterStyle"); ?>
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
</div><!--end of .navbar-->
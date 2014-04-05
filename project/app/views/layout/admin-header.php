<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dashboard -  Admin</title>

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
          <a class="navbar-brand" href="admin">Admin</a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right">
            <li class="dropdown user-dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-user"></i>User<b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#"><i class="glyphicon glyphicon-user"></i> Profile</a></li>
                <li><a href="#"><i class="glyphicon glyphicon-cog"></i> Settings</a></li>
                <li class="divider"></li>
                <li><a href="#"><i class="glyphicon glyphicon-log-out"></i> Log Out</a></li>
              </ul>
            </li>
          </ul>
          <ul class="nav navbar-nav side-nav">
            <li class="active"><a href="admin"><i class="fa fa-dashboard"></i> Dashboard</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
     </div><!--/.navbar -->
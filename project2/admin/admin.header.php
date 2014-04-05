<?php

if(isset($_Session['page'])){
  $page=$_Session['page'];
}

?>


  <link rel="shortcut icon" href="images/favicon.png" type="image/png">
  <link href="css/import.css" rel="stylesheet">

  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap3/bootstrap.css" rel="stylesheet">    
  <link href="css/bootstrap3/offcanvas.css" rel="stylesheet">

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="../../assets/js/html5shiv.js"></script>
      <script src="../../assets/js/respond.min.js"></script>
      <![endif]-->

      <div class="navbar navbar-fixed-top navbar-inverse" role="navigation">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">
             <img src="images/favicon.png" alt=""> WPA13 Fashion - Admin 
             <img src="images/favicon.png" alt=""> 
           </a>
         </div>
         <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li <?php echo ($page=='index')? 'class=active':'' ;?> ><a href="#">Home</a></li>
            <li <?php echo ($page=='category')? 'class=active':'' ;?>><a href="category-list.php">Category</a></li>
            <li <?php echo ($page=='item')? 'class=active':'' ;?>><a href="item-list.php">Item</a></li>
            <li <?php echo ($page=='customer')? 'class=active':'' ;?>><a href="customer-list.php">Customer</a></li>
            <li <?php echo ($page=='logout')? 'class=active':'' ;?>><a href="lib/func.logout.php">Log out</a></li>
          </ul>
        </div><!-- /.nav-collapse -->
      </div><!-- /.container -->
    </div><!-- /.navbar -->

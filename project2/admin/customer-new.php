<?php

@session_start();
$_Session['page']='customer';

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>WPA13 - Fashion | Admin <Customer-New></title>

  <script type="text/javascript">

  $(document).ready(fuction(){

     

  });

  </script>
</head>

<body>
  <?php include_once('admin.header.php'); ?>

  <div class="container">

    <div class="row row-offcanvas row-offcanvas-right">
      <div class="col-xs-12 col-sm-9">

        
        <div class="row">
          <div class="col-1">
          <p>Home >  Customer-New </p>
          <p>This is Customer-New. </p>
        </div><!--/span-->
         


        </div><!--/row-->
      </div><!--/span-->

      <?php include_once('admin.sidebar.php'); ?>

      
      <?php include_once('admin.footer.php'); ?>

    </div><!--/.container-->



    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap3/bootstrap.js"></script>
    <script src="js/bootstrap3/offcanvas.js"></script>
  </body>

  <!-- Mirrored from getbootstrap.com/examples/offcanvas/ by HTTrack Website Copier/3.x [XR&CO'2013], Wed, 02 Oct 2013 12:14:45 GMT -->
  </html>

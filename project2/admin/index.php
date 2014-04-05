<?php
@session_start();
$_Session['page']='index';

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>ピョーカッジン - Fashion | Admin</title>

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
          
          <div class="jumbotron">
            <h1>Welcome! </h1>
            <p>This is Admin Panel. You can view list of info, and also edit and delete that info.</p>
          </div>

          <div class="row">
            <div class="page-header">
              <h2>Main <small>Panel</small></h2>
            </div>

            <div class="col-6 col-sm-6 col-lg-4">
              <h4>Customer</h4>              
              <p><a class="btn btn-danger" href="customer-list.php">View List &raquo;</a></p>
            </div><!--/span-->

            <div class="col-6 col-sm-6 col-lg-4">
              <h4>Item</h4>              
              <p><a class="btn btn-danger" href="item -list.php">View List &raquo;</a></p>
            </div><!--/span-->
            

            <div class="row"></div>           

            <div class="page-header">
              <h2>General <small>Panel</small></h2>
            </div>


            <div class="col-6 col-sm-6 col-lg-4">
              <h4>Category</h4>              
              <p><a class="btn btn-default" href="category-list.php">View List &raquo;</a></p>
            </div><!--/span-->

            <div class="col-6 col-sm-6 col-lg-4">
              <h4>Type</h4>              
              <p><a class="btn btn-default" href="category-list.php">View List &raquo;</a></p>
            </div><!--/span-->

            <div class="col-6 col-sm-6 col-lg-4">
              <h4>Tag</h4>              
              <p><a class="btn btn-default" href="category-list.php">View List &raquo;</a></p>
            </div><!--/<span--></span-->

            <div class="col-6 col-sm-6 col-lg-4">
              <h4>Color</h4>              
              <p><a class="btn btn-default" href="category-list.php">View List &raquo;</a></p>
            </div><!--/span-->

            <div class="col-6 col-sm-6 col-lg-4">
              <h4>Brand</h4>              
              <p><a class="btn btn-default" href="category-list.php">View List &raquo;</a></p>
            </div><!--/span-->

            <div class="col-6 col-sm-6 col-lg-4">
              <h4>Material</h4>              
              <p><a class="btn btn-default" href="category-list.php">View List &raquo;</a></p>
            </div><!--/<span--></span-->
            
            
          

            




          </div><!--/row-->
        </div><!--/span-->

        <?php include_once('admin.sidebar.php'); ?>

      
	<?php include_once('admin.footer.php'); ?>

    </div><!--/.container-->



    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?php echo JS;?>/jquery.js"></script>
    <script src="<?php echo JS;?>/bootstrap3/bootstrap.js"></script>
    <script src="<?php echo JS;?>/bootstrap3/offcanvas.js"></script>
  </body>

<!-- Mirrored from getbootstrap.com/examples/offcanvas/ by HTTrack Website Copier/3.x [XR&CO'2013], Wed, 02 Oct 2013 12:14:45 GMT -->
</html>

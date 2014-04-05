<?php

@session_start();
$_Session['page']='category';

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>WPA13 - Fashion | Admin <Category-List></title>

  <script type="text/javascript">

    $(document).ready(fuction(){


    });

  </script>

  <style>

  </style>

</head>
<body>
  <?php include_once('admin.header.php'); ?>

  <div class="container">

    <div class="row row-offcanvas row-offcanvas-right">
      <div class="col-xs-12 col-sm-9">


        <div class="row">
          <div class="col-1">
            <!--/my code start here-->
            <div class="page-header">
              <h2>Category <small>List /  Search </small></h2>
            </div>


            <!--Start Search Section-->
            <div class="search-panel rounded-corners">
              <div class="row">
                <!--Row = 2,4,6-->
                <!--Start Row = 2 -->
                <div class="col-md-2">
                 <div class="btn-group">
                  <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown">
                    Choose Type <span class="caret"></span>
                  </button>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Category ID</a></li>
                    <li><a href="#">Category Name</a></li>
                  </ul>
                </div>
              </div> <!--End Row = 2 -->

              <!--Start Row = 4 -->
              <div class="col-md-4"><input type="text" class="form-control"></div>
              <!--End Row = 4 -->

              <!--Start Row = 6 -->
              <div class="col-md-6">
                <a class="btn btn-danger" href="category-list.php">Search</a>
                <a class="btn btn-danger" href="category-list.php">Show All</a>
              </div>  
              <!--End Row = 6 -->             
            </div>     
          </div>
          <!--End Search Section-->

          <!--Start New Section-->
          <a class="btn btn-danger" href="category-new.php">New</a>                     
          <!--End New Section-->

          <!--Start List Section-->
          <table class="table table-hover">
            <thead>
              <tr>
                <td>#</td>
                <td>Category Name</td>
                <td>Edit</td>
                <td>Delete</td>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>Mark</td>
                <td><a href="category-new.php?mode=edit">Edit</a></td>
                <td><a href="#">Delete</a></td>
              </tr>
              <tr>
                <td>1</td>
                <td>Mark</td>
                <td><a href="#">Edit</a></td>
                <td><a href="#">Delete</a></td>
              </tr>
              <tr>
                <td>1</td>
                <td>Mark</td>
                <td><a href="#">Edit</a></td>
                <td><a href="#">Delete</a></td>
              </tr>

            </tbody>
          </table>
          <!--End List Section-->
          <!--/my code end here-->                     
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

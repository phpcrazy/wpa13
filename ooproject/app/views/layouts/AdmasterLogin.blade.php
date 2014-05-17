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

  <link rel="shortcut icon" href="admin/images/favicon.png" type="image/png">
  {{ HTML::style('admin/css/import') }}
  <!-- Bootstrap core CSS -->
  {{ HTML::style('admin/css/bootstrap3/bootstrap') }}  
  {{ HTML::style('admin/css/bootstrap3/offcanvas') }}


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
             <img src="admin/images/favicon.png" alt=""> WPA13 Fashion - Admin 
             <img src="admin/images/favicon.png" alt=""> 
           </a>
         </div>
         
       </div><!-- /.container -->
     </div><!-- /.navbar -->


     <div class="container">

      @yield("content")
      <hr>
    </div><!--/.container-->
    <footer>
      <p>Copyright &copy; 2014 Phyoe Khant Zin　All Rights Reserved.</p>
    </footer>



    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    
    {{ HTML::script('admin/js/jquery') }}
    {{ HTML::script('admin/js/bootstrap3/bootstrap') }}
    {{ HTML::script('admin/js/bootstrap3/offcanvas') }}
    
  </body>

  <!-- Mirrored from getbootstrap.com/examples/offcanvas/ by HTTrack Website Copier/3.x [XR&CO'2013], Wed, 02 Oct 2013 12:14:45 GMT -->
  </html>

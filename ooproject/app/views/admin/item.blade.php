@extends('layouts.Admaster')

@section('content')


<div class="row row-offcanvas row-offcanvas-right">
      <div class="col-xs-12 col-sm-9">


        <div class="row">
          <div class="col-1">
            <!--/my code start here-->
            <div class="page-header">
              <h2>Item <small>List /  Search </small></h2>
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
                    <li><a href="#">Item Code</a></li>
                    <li><a href="#">Item Name</a></li>
                    <li><a href="#">Price</a></li>
                    <li><a href="#">Brand</a></li>
                    <li><a href="#">Category</a></li>
                    <li><a href="#">Color</a></li>
                    <li><a href="#">Material</a></li>
                    <li><a href="#">Type</a></li>
                  </ul>
                </div>
              </div> <!--End Row = 2 -->

              <!--Start Row = 4 -->
              <div class="col-md-4"><input type="text" class="form-control"></div>
              <!--End Row = 4 -->

              <!--Start Row = 6 -->
              <div class="col-md-6">
                <a class="btn btn-danger" href="item-list.php">Search</a>
                <a class="btn btn-danger" href="item-list.php">Show All</a>
              </div>  
              <!--End Row = 6 -->             
            </div>     
          </div>
          <!--End Search Section-->

          <!--Start New Section-->
          <a class="btn btn-danger" href="item-new.php">New</a>                     
          <!--End New Section-->

          <!--Start List Section-->
          <table class="table table-hover">
            <thead>
              <tr>
                <td>#</td>
                <td>Item Code</td>
                <td>Item Name</td>
                <td>Price</td>
                <td>Brand</td>
                <td>Category</td>
                <td>Color</td>
                <td>Material</td>
                <td>Country</td>
                <td>Edit</td>
                <td>Delete</td>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>Mark</td>
                <td>Mark</td>
                <td>Mark</td>
                <td>Mark</td>
                <td><a href="#">Edit</a></td>
                <td><a href="#">Delete</a></td>
              </tr>
              <tr>
                <td>1</td>
                <td>Mark</td>
                <td>Mark</td>
                <td>Mark</td>
                <td>Mark</td>
                <td><a href="#">Edit</a></td>
                <td><a href="#">Delete</a></td>
              </tr>
              <tr>
                <td>1</td>
                <td>Mark</td>
                <td>Mark</td>
                <td>Mark</td>
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
<div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar" role="navigation">
  <div class="well sidebar-nav">

   <h3>Main Panel</h3>
    <ul class="nav">              

      <li><a href="">Customer</a></li>
      <li><a href="">Item</a></li>

    </ul>

    
    <h3>General Panel</h3>
    <ul class="nav">              

     
      <li><a href="/calist">Category</a></li>
      <li><a href="type-list.php">Type</a></li>
      <li><a href="tag-list.php">Tag</a></li>
      <li><a href="color-list.php">Color</a></li>
      <li><a href="brand-list.php">Brand</a></li>
      <li><a href="material-list.php">Material</a></li>
    </ul>



  </div><!--/.well -->
</div><!--/span-->
      </div><!--/row-->
@stop
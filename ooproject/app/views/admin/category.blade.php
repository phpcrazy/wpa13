@extends('layouts.Admaster')

@section('content')
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
@stop
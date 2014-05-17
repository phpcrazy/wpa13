@extends('layouts.Admaster')

@section('content')
<div class="row row-offcanvas row-offcanvas-right">
      <div class="col-xs-12 col-sm-9">


        <div class="row">
          <div class="col-1">
            <div class="page-header">
              <h2>Category <small>New</small></h2>
            </div>

            <form class="form-horizontal" role="form">
              <div class="form-group">
                <label for="inputCategoryName" class="col-lg-2 control-label">Category Name</label>
                <div class="col-lg-4">
                  <input type="email" class="form-control" id="inputEmail1" placeholder="Category Name">
                </div>
              </div>
             
              
              <div class="form-group">
                <div class="col-lg-offset-2 col-lg-10">
                 <a class="btn btn-danger" href="category-new.php">Add</a>    
                </div>
              </div>
            </form>




          </div><!--/span-->



        </div><!--/row-->
      </div><!--/span-->
@stop
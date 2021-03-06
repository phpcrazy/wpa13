@extends('layouts.AdmasterLogin')

@section('content')

 <div class="row row-offcanvas row-offcanvas-right">
      <div class="col-xs-12 col-sm-9">

        <div class="row">
        

          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-md-4 col-md-offset-4">
                <h1 class="text-center login-title">Log In</h1>
                <div class="account-wall">

                  <form class="form-signin">
                    <input type="text" class="form-control" placeholder="Email" required autofocus><br>                  
                    <input type="password" class="form-control" placeholder="Password" required><br>
                    <button class="btn btn-lg btn-danger btn-block" type="submit">
                      Sign in</button>
                      <label class="checkbox pull-left">
                        <input type="checkbox" value="remember-me">
                        Remember me
                      </label>
                      <a href="#" class="pull-right need-help"> </a><span class="clearfix"></span>
                    </form>
                  </div>
                  <a href="#" class="text-center new-account">Create an account </a>
                </div>
              </div>
            </div>


          </div><!--/row-->
        </div><!--/span-->


@stop

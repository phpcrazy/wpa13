<?php load_view("layout/header"); ?>
<div class="container">
	<div class="row">
		<div class="col-md-12">
		  <div class="panel panel-default" id="loginPanel">
		  	<div class="panel-heading" ><h4>Login</h4></div>
		  	<div class="panel-body">
		  		<form role="form" >
  					<div class="form-group">
    					<label for="userName">User name</label>
    					<input type="input" class="form-control" id="userName" placeholder="User name ..." />
  					</div>
  					<div class="form-group">
  						<label for="password">Password</label>
  						<input type="password" class="form-control"	id="password" placeholder="password" />
  					</div>
  					<button type="submit" class="btn btn-info btn-block pull-right" id="btnLogin">Login</button>
  					<a href="register" id="register">Don't have a account! Register here</a>
 			</form>
		  	</div>
		  </div>
		</div>
	</div>
</div>
<script >var page="login";</script>
<?php load_view("layout/footer"); ?>
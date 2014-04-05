<?php load_view("layout/header"); ?>
<div class="container">
	<div class="row">
		<div class="col-md-12">
		  <div class="panel panel-default" id="registerPanel">
		  	<div class="panel-heading" ><h4>Register</h4></div>
		  	<div class="panel-body">
		  		<form role="form" >
  					<div class="form-group">
    					<label for="userName">User name</label>
    					<input type="input" class="form-control" id="userName" placeholder="User name"/>
  					</div>
  					<div class="form-group">
  						<label for="password">Password</label>
  						<input type="password" class="form-control"	id="password" placeholder="password"/>
  					</div>
  					<div class="form-group">
  						<label for="comfirmPassword">Comfirm password</label>
  						<input type="password" class="form-control"	id="omfirmPassword" placeholder="Comfirm password"/>
  					</div>
  					<div class="form-group">
  					<label for="male">Gender</label><br>
  					<label class="radio-inline">
  						<input type="radio" id="male" value="male" name="gender" checked="checked">Male
					</label>
					<label class="radio-inline">
  						<input type="radio" id="female" value="female" name="gender" >Female
					</label>
					</div>
  					<div class="form-group">
    					<label for="email">Email address</label>
    					<input type="email" class="form-control" id="email" placeholder="Email">
  					</div>
  					<button type="submit" class="btn btn-info btn-block pull-right" id="btnLogin">Register</button>
 			</form>
		  	</div>
		  </div>
		</div>
	</div>
</div>
<script >var page="register";</script>
<?php load_view("layout/footer"); ?>
@extends("layouts/master")
@section("content")
<div class="col-md-5">
	<div class="fashion-item">
		<img class="img-responsive item-img" src="img/man.jpg" alt="">
	</div>
</div><!-- </col-md-5> -->

<div class="col-md-7">
	<h2 class="page-header">Man Wear :  Detail</h2>
	<!-- About , Deliver ,Color-->
	<table class="table">
		<thead>
		 <tr class="active">
			<th>Item</th>
			<th>Price</th>
			<th>ID</th>
		 </tr>
		</thead>
		<tbody>
		 <tr class="success">
			<td>Man Wear</td>
			<td>12000 ks</td>
			<td>1234567</td>
		 </tr>
		</tbody>
	</table>
	<div class="panel-group" id="accordion">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#about-item">
          About
        </a>
      </h4>
    </div>
    <div id="about-item" class="panel-collapse collapse in">
      <div class="panel-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#deliver">
          Deliver System
        </a>
      </h4>
    </div>
    <div id="deliver" class="panel-collapse collapse">
      <div class="panel-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#color">
          Color
        </a>
      </h4>
    </div>
    <div id="color" class="panel-collapse collapse">
      <div class="panel-body">
       	<button type="button" class="btn btn-primary"></button>
       	<button type="button" class="btn btn-success"></button>
       	<button type="button" class="btn btn-warning"></button>
       	<button type="button" class="btn btn-danger"></button>
       	<button type="button" class="btn btn-info"></button>
      </div>
    </div>
  </div>
</div>

	<a href="#">Buy <span class="badge">42</span></a>
	<a href="#">View <span class="badge">422</span></a><br><br>
	<button class="btn btn-lg btn-primary"><span class="glyphicon glyphicon-shopping-cart"></span>Add to Basket</button>
	<button class="btn btn-lg btn-primary">$ Buy</button>
</div><!-- </col-md-7> -->

<!-- Match items -->
<div class="col-md-12">
	<h2>Match Items</h2>
	<div class="col-md-3 col-xs-6 ">
		<a href="#" class="thumbnail">
      		<img  class="img-responsive item-img" alt="" src="img/man.jpg">
   		</a>
	</div>
	<div class="col-md-3 col-xs-6 ">
		<a href="#" class="thumbnail">
      		<img  class="img-responsive item-img" alt="" src="img/man.jpg">
   		</a>
	</div>
	<div class="col-md-3 col-xs-6 ">
		<a href="#" class="thumbnail">
      		<img  class="img-responsive item-img" alt="" src="img/man.jpg">
   		</a>
	</div>
</div>
@stop

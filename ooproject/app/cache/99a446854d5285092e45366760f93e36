<?php 
//number of items show per page
$itemPerPage = 9;

//get the calling page
//$page= $data["page"];	

echo 	'<div class="col-md-9">';
echo 	'<div class="col-md-12 col-sm-12">';

//show page header
echo	'<h1 class="page-header"><small>Everthing is here ....</small></h1>';

//show page number
echo 	'<ul class="pagination pull-right">'.
  			'<li ><a href="#">&laquo;</a></li>'.
  			'<li class="active"><a href="#">1 </a></li>'.
  			'<li ><a href="#">2 </a></li>'.
  			'<li ><a href="#">3 </a></li>'.
  			'<li ><a href="#">&raquo;</a></li>'.
  		'</ul>';
 echo "</div>";

//show the block of each items
for($index=0; $index<$itemPerPage; $index++)
{
	
	echo		'<div class="col-md-4 col-sm-4 col-xs-12">'.
				'<div class="fashion-item">'.
					'<div class="item-body">'.
						'<img class="img-responsive item-img" src="img/man.jpg" />'.//from db
					'</div>'.
					'<div class="item-footer">'.
						'<p class="item-id">ID : 12334567 </p>'.//from db
						'<p span class="item-price">Price : 12000ks </p>'.//from db
						'<a href=""><button type="button" class="btn btn-info ">Buy</button><a>'.//from db
						'<a href="detail"><button type="button" class="btn btn-info pull-right">Detail</button></a>'.//from db
					'</div>'.
				'</div>'.
			'</div><!-- ./col-md-4-->';
		
}
echo '</div><!-- ./col-md-9 -->';
?>	
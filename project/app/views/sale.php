<?php load_view("layout/header"); ?>
<div class="container">
	<div calss="row">
		<!--site menu-->
		<?php load_view("layout/site-menu"); ?>
		<!-- item area-->
		<?php load_view('layout/item-area',array("page"=>"sale")); ?>
	</div><!-- ./row -->
</div><!-- ./container -->
<script>var page="sale";</script>
<?php load_view("layout/footer"); ?>
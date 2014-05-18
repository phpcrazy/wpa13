<?php 

class SaleController {
	public function __construct() {
		
	}
	public function actionIndex() {
		return View::make('sale');
	}
}

 ?>
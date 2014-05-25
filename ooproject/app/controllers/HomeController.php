<?php 

class HomeController {
	public function __construct() {
		
	}

	public function actionIndex() {
		return View::make('index');
	}

	public static function blog() {
		return "Hello from Blog!";
	}
}
/*
product
user
sales
order

mmlinks45a1cBE2*V
*/

 ?>
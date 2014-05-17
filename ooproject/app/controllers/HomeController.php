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

 ?>
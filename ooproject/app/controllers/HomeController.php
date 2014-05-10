<?php 

class HomeController {
	public function __construct() {
		echo "Hello from Constructor!";
	}

	public function actionIndex() {
		return View::make('index');
	}

	public static function blog() {
		return "Hello from Blog!";
	}
}

 ?>
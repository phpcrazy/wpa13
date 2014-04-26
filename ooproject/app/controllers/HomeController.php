<?php 

class HomeController {
	public function __construct() {
		echo "Hello from Constructor!";
	}

	public static function actionIndex() {
		View::make('index');
	}

	public static function blog() {
		echo "Hello from Blog!";
	}
}

 ?>
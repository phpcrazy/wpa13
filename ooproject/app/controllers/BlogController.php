<?php 

class BlogController {
	public function __construct() {
		echo "Blog Constructor Run!";
	}
	public function actionIndex() {
		View::make('blog');
	}
}

 ?>
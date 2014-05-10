<?php 

class BlogController {
	public function __construct() {
		echo "Constructor!";
	}
	public function actionIndex($id, $category_id) {
		return View::make('blog');
	}
}

 ?>
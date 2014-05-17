<?php 


class CategoryController{
	public function __construct(){
    
	}
	public function actionIndex(){
		
		return View::make('admin/category');
	}
	public function actionCategoryNew(){
		return View::make('admin/categoryNew');
	}
}

 ?>
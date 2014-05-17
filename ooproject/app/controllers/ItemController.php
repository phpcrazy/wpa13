<?php 


class ItemController{
	public function __construct(){
    
	}
	public function actionIndex(){
		
		return View::make('admin/item');
	}
	public function actionItemNew(){
		return View::make('admin/itemNew');
	}
}

 ?>
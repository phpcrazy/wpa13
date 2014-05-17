<?php 


class AdminController{
	public function __construct(){
    
	}
	public function actionIndex(){
		
		return View::make('admin/login');
	}
	public function actionNewReg() {
		return View::make('admin/newreg');
	}
}

 ?>
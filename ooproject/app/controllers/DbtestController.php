<?php 

class DbtestController {
	public function actionIndex() {
		$users = DB::table('products')->get();
		dump($users);
		$user = DB::table('customers')
					->where('id', 2)
					->get();
		dump($user);
		$users = DB::table('customers')
					->select(array('name', 'email'))
					->get();
		dump($users);
		$users = DB::table('customers')
					->orWhere(array('name' => 'Aung Aung', 'name' => 'Hla Hla'))
					->get();
	}
}

 ?>
<?php 

class DbtestController {
	public function actionIndex() {
		$users = DB::table('products')->get();	
		
		$user = DB::table('customers')
					->where('id', 2)
					->get();
	
		$users = DB::table('customers')
					->select(array('name', 'email'))
					->get();
	
		$users = DB::table('customers')
					->where('name', 'Bo Bo Aung')
					->orWhere('name', 'Hla Hla')
					->get();
		dump($users);

		$users = DB::table('products')
					->where('name', 'Bo Bo Aung')
					->andWhere('email', 'bobo@gmail.com')
					->get();
		dump($users);
	}
}

 ?>
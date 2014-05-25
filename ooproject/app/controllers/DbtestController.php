<?php 

class DbtestController {
	public function actionIndex() {
		$users = DB::table('customers')->get();
		dump($users);
		// $users = $db->query($sql);
	}
}

 ?>
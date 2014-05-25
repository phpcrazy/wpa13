<?php 

class DataController {
	public function actionIndex() {

		try {
			$conn = new PDO(
				'mysql:host=localhost;dbname=wpa13', // servername, database 
				'root', // username
				'mmlinks'); // password
		} catch(PDOException $e) {
			echo "Something wrong, Database Connection Failed";
		}

	}
}

 ?>
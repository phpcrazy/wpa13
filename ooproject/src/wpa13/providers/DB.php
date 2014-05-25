<?php 

class DB {
	// static class instantiate
	private static $_instance = null;

	private $conn; 
	private $table;

	public function __construct() {
		$hostname = Config::get('database.hostname');
		$dbname = Config::get('database.dbname');
		$username = Config::get('database.username');
		$password = Config::get('database.password');

		try {
			$this->conn = new PDO(
				"mysql:host=$hostname;dbname=$dbname", 
				$username, 
				$password);
		} catch(PDOException $e) {
			trigger_error('Something wrong, Database connection failed!', 
				E_USER_ERROR);
		}
	}

	public static function table($table_name) {
		if(self::$_instance === null) {
			self::$_instance = new self;
		}
		self::$_instance->table = $table_name;
		return self::$_instance;
	}

	public function get() {
		$sql = "SELECT * FROM " . $this->table;
		$query = $this->conn->query($sql);
		return $query->fetch(PDO::FETCH_ASSOC);
	}
		
/*
	private static $conn;
	public static $table;

	
	
	public static function table($table_name) {
		self::$table = $table_name;
	}	

	public static function get() {
		$table = self::$table;
		$sql = 'SELECT * FROM ' . $table;
		self::connect();
		$query = self::$conn->query($sql);
		return $query->fectch(PDO::FETCH_ASSOC);
	}

	*/
 }

 ?>

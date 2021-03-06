<?php 

class DB {
	// static class instantiate
	private static $_instance = null;

	private $conn; 
	private $table;

	private $sql;
	private $execute_array = array();

	private $flag = false;

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

	public function select($array_select) {
		$this->sql = 'SELECT ';
		foreach($array_select as $as) {
			$this->sql .= $as . ', ';
		}
		$this->sql = substr($this->sql, 0, -2);
		$this->sql .= ' FROM ' . $this->table;
		$this->flag = true;
		$this->execute_array = array();
		return $this;
	}

	public function where($key, $value) {
		$this->sql = 'SELECT * FROM ' .$this->table . ' WHERE ' . $key . ' = :' . $key;
		$this->execute_array = array(
			$key => $value
			);
		$this->flag = true;
		return $this;
	}

	public function orWhere($key, $value) {
		$this->sql .= ' OR ' . $key .  ' = :' . $key . '2';

		$second_array = array(
			$key . 2 => $value
			);

		$this->execute_array = $this->arrayCombine($this->execute_array, $second_array);
		return $this;
	}

	public function andWhere($key, $value) {
		$this->sql .= ' AND ' . $key . ' = :' . $key . '2';
		$second_array = array(
			$key . 2 => $value
			);

		$this->execute_array = $this->arrayCombine($this->execute_array, $second_array);
		return $this;
	}

	private function arrayCombine($first_array, $second_array) {
		$first_array = serialize($first_array);
		$second_array = serialize($second_array);
		$second_count = strlen($second_array);
		$second_array = substr($second_array, 5, $second_count);
		$first_array = str_replace('a:1', 'a:2', $first_array);
		$first_array = substr($first_array, 0, -1);
		$final_array = $first_array . $second_array;
		return unserialize($final_array);
	}


	public function get() {
		if($this->flag == false) {
			$this->sql = 'SELECT * FROM ' . $this->table;	
		}
		$stmt = $this->conn->prepare($this->sql);
		$stmt->execute($this->execute_array); 
		return $stmt->fetchAll(PDO::FETCH_ASSOC);
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

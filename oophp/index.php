<?php 

// properties
// methods
// magic method understand

class Dog {
	// static
	static $test = 'Hey';
	
	public static function bite() {
		echo "Bite!";
		echo static::$test;
		static::go();
	}

	private static function go() {
		echo "Go";
	} 

	// dynamic
	public $color = 'grey';
	private $data = array();

	public function __construct($color) {
		echo "Constructor Run!";
		$this->color = $color;
	}

	// methods
	public function run() {
		echo "Run! <br />";
	}

	public function __set($name, $value) {
		$this->data[$name] = $value;
	}

	public function __get($name) {
		if(array_key_exists($name, $this->data)) {
            return $this->data[$name];
        }
	}

	public function __call($name, $arguments) {
		var_dump($name);
		var_dump($arguments);
	}

	public static function __callStatic($name, $arguments) {
		var_dump($name);
		var_dump($arguments);
	}

	// public function __destruct() {
	// 	echo "Des!";
	// }
}

Dog::bite(); // Scope Resolution Operator
Dog::jump(5, 'Backward');

$puppy = new Dog('Red'); // clone 1
$puppy->name = 'Puppy';
$puppy->leg = 4;
echo $puppy->name . "<br />";
echo $puppy->color . "<br />";
echo $puppy->leg . "<br />"; // late loading (or) lazy loading
$puppy->run();
$puppy->run();
$puppy->dance('Micheal', 'Pop');
 ?>
<?php 

class Animal {
	public $name;

	public function __construct($name) {
		$this->name = $name;
	}
}

class Dog extends Animal {
	public $type;
	public function __construct($name, $type) {
		 parent::__construct($name);
		 $type = $this->type;
	}
}

 ?>
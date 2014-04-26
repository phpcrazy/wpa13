<?php 

namespace Wpa13;

class Application {
	public $page_array;

 	public function __construct() {
		// Language Loader
		\Lang::loader();

		// URI Request Handler
		$request_uri = $_SERVER['REQUEST_URI'];
		$script_name = $_SERVER['SCRIPT_NAME'];

		$request_uri = explode('/', $request_uri);
		$script_name = explode('/', $script_name);

		// substract the uri request value
		$this->page_array = array_diff($request_uri, $script_name);

		// rearrange the key
		$this->page_array = array_values($this->page_array);
	}

	public function start() {
		if(empty($this->page_array)) {
			$this->page_array[0] = 'home';
		} 

		$rules = include DD . '/app/routes.php';

		if(array_key_exists($this->page_array[0], $rules)) {
			$route = $rules[$this->page_array[0]];
			$controller = explode('@', $route['controller']);
			call_user_func_array(array($controller[0], $controller[1]), array());	
		} else {
			http_response_code(404);
			\View::make('404');
		}
	}
}

?>
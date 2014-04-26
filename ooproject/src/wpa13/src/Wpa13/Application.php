<?php 

namespace Wpa13;

class Application {
	public function start() {
		$request_uri = $_SERVER['REQUEST_URI'];
		$script_name = $_SERVER['SCRIPT_NAME'];

		$request_uri = explode('/', $request_uri);
		$script_name = explode('/', $script_name);

		// substract the uri request value
		$page_array = array_diff($request_uri, $script_name);

		// rearrange the key
		$page_array = array_values($page_array); 

		if(empty($page_array)) {
			$page_array[0] = 'home';
		} 

		// include DD . '/app/routes.php';

		$rules = array(
				'string'	=> array(
				'controller' 	=> 'StringController@actionIndex'
			),
				'home'	=> array(
				'controller' 	=> 'HomeController@actionIndex',
			),
		);

		if(array_key_exists($page_array[0], $rules)) {
			$route = $rules[$page_array[0]];
			$controller = explode('@', $route['controller']);
			call_user_func_array(array($controller[0], $controller[1]), array());	
		} else {
			http_response_code(404);
			echo "404 Not Found!";
		}
	}
}

?>
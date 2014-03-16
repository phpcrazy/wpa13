<?php 

define('DD', __DIR__ . '/../');

require DD . '/src/loader/ConfigLoader.php';
require DD . '/src/loader/ViewLoader.php';
require DD . '/src/helper.php';
require DD . "/app/controller/HomeController.php";
require DD . '/app/controller/MainController.php';
require DD . '/app/controller/StringController.php';

$request_uri = $_SERVER['REQUEST_URI'];
$script_name = $_SERVER['SCRIPT_NAME'];


$request_uri = explode('/', $request_uri);
$script_name = explode('/', $script_name);

$page_array = array_diff($request_uri, $script_name); // substract the uri request value

$page_array = array_values($page_array); // rearrange the key

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



/*

if(empty($page_array)) {
	if($_SERVER['REQUEST_METHOD'] == 'POST') {
		$input_text = $_POST['input-text'];
		$option = $_POST['optionsRadios'];
		switch($option) {
			case "option1":
				$code = "&lt;?php <br>echo strlen(\$text);<br>?&gt;";
				$data = array(
					'result' => count_number($input_text),
					'code'	=> $code,
					'description'	=> 'This function is to determine the length of string'
					);
				load_view('home', $data);
				break;
			case "option2":
				$code = "&lt;?php <br>\$buffer = explode('', \$text);<br>return count(\$buffer);<br>?&gt;";
				$data = array(
					'result' => count_word($input_text),
					'code'	=> $code,
					'description' => 'This program shows how to count word in string'
					);
				load_view('home', $data);
				break;
		}
	} else {
		$data = array(
			'result' => '',
			'code'	=> '',
			'description' => ''
			);
		load_view('home', $data);
	}
} else {
	if($page_array[0] == 'about') {
		ob_start();
		http_response_code('200');
		load_view('about');
		ob_end_flush();
	} elseif ($page_array[0] == 'contact') {
		ob_start();
		http_response_code('200');
		load_view('contact');
		ob_end_flush();
	} else {
		http_response_code('404');
		echo "Your page is not found, Idiot!";
	}
}
*/

?>


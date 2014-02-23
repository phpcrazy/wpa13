<?php 

define('DD', __DIR__ . '/../');

// GET Method
// 1. check the existance of get request
// 2. Prevent Script Injection
// 3. Prevent long request
// 		- mod_security
//		- limit request string length
// 4. handle 404!

if(isset($_GET['page'])) { // 1. check the existance of request variable
	$page = htmlspecialchars($_GET['page']); // 2. Prevent script injection
	if(strlen($page) > 200) { // 3. Prevent long request
		http_response_code(404); // write response code
		echo "Your request to long to process, idiot!";
		die();
	} else {
		if($page == 'about') {
			ob_start();
			require DD. '/app/views/about.php';
			ob_end_flush();
		} else {
			http_response_code(404);
			echo "404, Your request is not found in the server!";
		}
	}
} else {
	ob_start(); // Output buffering start
	require DD . '/app/views/home.php';
	ob_end_flush(); // Output Buffering release
}




/*
var_dump($_REQUEST);
var_dump($_POST);
var_dump($_COOKIE);
var_dump($_SERVER);
*/
/*
$students = array(
	array(
		'id'	=> 1,
		'name'	=> 'Hla Hla',
		'address'	=> 'Hledan'
	),
	array(
		'id'		=> 2,
		'name'		=> 'Ko Ko',
		'address'	=> 'Hledan'
		)
);

foreach($students as $student) {
	var_dump($student['name']);
	var_dump($student['address']);
}


die();
*/

?>
<?php 

define('DD', __DIR__ . '/../');
$request_uri = $_SERVER['REQUEST_URI'];
$script_name = $_SERVER['SCRIPT_NAME'];

$request_uri = explode('/', $request_uri);
$script_name = explode('/', $script_name);

$page_array = array_diff($request_uri, $script_name); // substract the uri request value
$page_array = array_values($page_array); // rearrange the key

if(empty($page_array)) {
	ob_start();
	http_response_code('200');
	require DD . "/app/views/home.php";
	ob_end_flush();
} else {
	if($page_array[0] == 'about') {
		ob_start();
		http_response_code('200');
		require DD . "/app/views/about.php";
		ob_end_flush();
	} else {
		http_response_code('404');
		echo "Your page is not found, Idiot!";
	}
}
?>
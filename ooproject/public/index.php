<?php 

define('DD', __DIR__ . '/../');
require DD . "/vendor/autoload.php";

if(isset($_GET['lang'])) {
	Lang::writer($_GET['lang']);
	header('Location: ' . "http://wpa13.local/");
}

$data = array(
	'site_title'	=> Lang::get('application.site_title')
	);

View::make('index', $data);

 ?>
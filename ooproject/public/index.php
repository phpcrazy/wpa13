<?php 

define('DD', __DIR__ . '/../');
require DD . "/vendor/autoload.php";


$data = array(
	'site_title'	=> Lang::get('application.site_title')
	);

View::make('index', $data);

 ?>
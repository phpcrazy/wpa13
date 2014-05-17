<?php 

function dump($value, $dump = false) {
	var_dump($value);
	if ($dump == true) {
		die();
	}
}

function base_url() {
	return Config::get('application.site_url');
}

 ?>
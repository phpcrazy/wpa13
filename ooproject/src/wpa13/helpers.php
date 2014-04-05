<?php 

function dump($value, $dump = false) {
	var_dump($value);
	if ($dump == true) {
		die();
	}
}

 ?>
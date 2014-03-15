<?php 

function count_number($input_text) {
	return strlen($input_text);
}

function count_word($input_text) {
	$buffer = explode(' ', $input_text);
	return count($buffer);
}

 ?>
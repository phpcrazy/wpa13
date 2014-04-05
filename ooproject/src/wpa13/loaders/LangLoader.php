<?php 

class Lang {
	public static function get($lang) {
		$e_lang = explode('.', $lang);
		$default_language = Config::get('application.default_language');
		$default_array = require DD 
			. '/app/lang/' 
			. $default_language 
			. '/' . $e_lang[0] . '.php';
		return $default_array[$e_lang[1]]; 
	}
}

 ?>
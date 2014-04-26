<?php 

class Lang {
	public static function loader() {
		if(isset($_GET['lang'])) {
			static::writer($_GET['lang']);
			header('Location: ' . Config::get('application.site_url'));
		}
	}

	public static function get($lang) {
		$e_lang = explode('.', $lang);
		$default_language = Config::get('application.default_language');
		if(isset($_COOKIE['default_language'])) {
			$default_language = $_COOKIE['default_language'];
		}
		$default_array = require DD 
			. '/app/lang/' 
			. $default_language 
			. '/' . $e_lang[0] . '.php';
		return $default_array[$e_lang[1]]; 
	}

	public static function writer($lang) {
		setcookie("default_language", $lang);
	}
}

 ?>
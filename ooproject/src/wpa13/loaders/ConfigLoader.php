<?php 

class Config {
	public static function get($config) {
		$e_config = explode('.', $config);
		$config_array = require DD . "/app/config/" . $e_config[0] . ".php";
		return $config_array[$e_config[1]];
	}
}

 ?>
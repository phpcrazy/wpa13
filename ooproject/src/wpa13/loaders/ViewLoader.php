<?php 

class View {
	public static function make($view) {
		ob_start();
		require DD . "/app/" . Config::get('system.view_folder') . '/' . $view . ".php";
		ob_end_flush();
	}
}

 ?>
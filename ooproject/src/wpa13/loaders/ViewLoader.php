<?php 

class View {
	public static function make($view, $data) {
		ob_start();
		extract($data);
		require DD . "/app/" . Config::get('system.view_folder') . '/' . $view . ".php";
		ob_end_flush();
	}
}

 ?>
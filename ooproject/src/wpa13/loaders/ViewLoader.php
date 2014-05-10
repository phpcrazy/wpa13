<?php 

class View {
	public static function make($view, $data = null) {
		ob_start();
		if($data != null) {
			extract($data);
		}
		require DD . "/app/" . Config::get('system.view_folder') . '/' . $view . ".php";
		return ob_get_clean();
	}

}

 ?>
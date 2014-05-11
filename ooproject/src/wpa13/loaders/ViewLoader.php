<?php 
use Philo\Blade\Blade;

class View {

	public static function make($view, $data = null) {
	
		// blade template
		$views = DD . '/app/views';	
		$cache = DD . '/app/cache';

		$blade = new Blade($views, $cache);
	

		/*
		// Twig template
		$loader = new Twig_Loader_Filesystem(DD . '/app/views'); // point twig handled folder
		$twig = new Twig_Environment($loader, array(
  		  		'cache' => DD . '/app/cache',
		));
		*/

		ob_start();
		/*
		// Normal Loading
		if($data != null) {
			extract($data);
		}
		$file = DD . "/app/" . Config::get('system.view_folder') . '/' . $view . ".php";
		*/
		/*
		// twig template
		$file = $view . '.php';
		echo $twig->render($file, $data);
		*/

		// blade loading 
		if($data != null) {
			echo $blade->view()->make($view, $data);	
		} else {
			echo $blade->view()->make($view); 
		}
		
		return ob_get_clean();
	}

}

 ?>
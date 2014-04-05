<?php
	function load_view($view , $data = null)
	{
		ob_start();
		http_response_code(200);
		if( $data != null )
		{
			extract($data);
		}
		require DD."app/" . LoadConfig("view_folder") . "/" . $view . ".php";
		ob_end_flush();
	}
	function load_css($css){
		$html 	 = "<link rel='stylesheet' href='";
		//$html	.= LoadConfig("base_url");
		$html	.= $css ;
		$html	.= ".css'>" . "\n";
		echo $html;
	}
	function load_js($js){
		$html 	 = "<script src='";
		$html 	.= $js;
		$html	.= ".js'></script>" . "\n";
		echo $html;
	}

?>
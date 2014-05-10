<?php 


class HTML {
	public static function style($link) {
		$html = '<link rel="stylesheet" href="';
		$html .= Config::get('application.site_url');
		$html .= $link;
		$html .= '.css">' . "\n";
		return $html;
	}
}

 ?>

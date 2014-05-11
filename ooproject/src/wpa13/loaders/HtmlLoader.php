<?php 


class HTML {
	public static function style($link) {
		$html = '<link rel="stylesheet" href="';
		$html .= Config::get('application.site_url');
		$html .= $link;
		$html .= '.css">' . "\n";
		return $html;
	}

	public static function script($link) {
		$html = '<script src="';
		$html .= Config::get('application.site_url');
		$html .= $link;
		$html .= '.js"></script>' . "\n";
		return $html;
	}
}

?>

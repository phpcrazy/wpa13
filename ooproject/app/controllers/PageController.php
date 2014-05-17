<?php 

class PageController {
	public function actionIndex() {
		$data = array(
			'title'			=> 'Myannar Links',
			'another_title'	=> 'Myanmar Tutorials'
			);
		return View::make('twig', $data);
	}
}

 ?>
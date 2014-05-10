<?php 

// Route Rules Creation
use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

$routes = new RouteCollection();

$routes->add(
	'home',
	new Route('/', array(
		'_controller' => 'HomeController::actionIndex'
		)
	)
);

$routes->add(
	'blog',
	new Route(
		'/blog/{id}/{category_id}', 
		array(
			'id'	=> 1,
			'category_id' => 23,
			'_controller' => 'BlogController::actionIndex',
		)
	)
);

$routes->add(
	'page',
	new Route(
		'/page/{page_id}', 
		array(
			'_controller' => 'PageController::actionIndex'
			)
		)
	);

return $routes;


?>
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
	new Route('/blog', array(
		'_controller' => 'BlogController::actionIndex'
		)
	)
);

return $routes;


?>
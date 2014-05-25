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
		'/page', 
		array(
			'_controller' => 'PageController::actionIndex'
			)
		)
	);
$routes->add(
	'login',
	new Route(
		'/login', 
		array(
			'id'=> 1,
			'_controller' => 'AdminController::actionIndex'
			)
		)
	);
$routes-> add(
	'adminnewreg',
	new Route(
		'/adminnewreg',
		array(
			'_controller' => 'AdminController::actionNewReg'
			)
		)
	);

$routes->add(
	'item',
	new Route(
		'/admin/item', 
		array(
			'_controller' => 'ItemController::actionIndex'
			)
		)

	);
$routes-> add(
	'itemnew',
	new Route(
		'/admin/itemnew',
		array(
			'_controller' => 'ItemController::actionItemNew'
			)
		)
	);
$routes->add(
	'category',
	new Route(
		'/admin/category', 
		array(
			'_controller' => 'CategoryController::actionIndex'
			)
		)

	);
$routes-> add(
	'categorynew',
	new Route(
		'/admin/categorynew',
		array(
			'_controller' => 'CategoryController::actionCategoryNew'
			)
		)
	);

$routes->add(
	'sale',
	new Route(
		'/sale', 
		array(
			'_controller' => 'SaleController::actionIndex'
			)
		)
	);

$routes->add(
	'detail',
	new Route(
		'/detail', 
		array(
			'_controller' => 'DetailController::actionIndex'
			)
		)
	);

$routes->add(
	'data',
	new Route(
		'/data',
		array(
			'_controller' => 'DataController::actionIndex'
			)
		)
	);

$routes->add(
	'dbtest',
	new Route(
		'/dbtest',
		array(
			'_controller'	=> 'DbtestController::actionIndex'
			)
		)
	);


return $routes;


?>
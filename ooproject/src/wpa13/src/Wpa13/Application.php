<?php 
namespace Wpa13;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

use Symfony\Component\HttpKernel\Controller\ControllerResolver;

use Symfony\Component\Routing;
use Symfony\Component\Routing\Matcher\UrlMatcher;
use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

class Application {
	public $request;
	public $path_info;
	public $page_array;
	public $routes;
	public $resolver;

 	public function __construct() {
		// Language Loader
		\Lang::loader();

		$this->request = Request::createFromGlobals();
		$this->path_info = $this->request->getPathInfo();
		$this->context = new RequestContext();
		$this->resolver = new ControllerResolver();
		
		// URI Request Handler
		// $request_uri = $_SERVER['REQUEST_URI'];
		// $script_name = $_SERVER['SCRIPT_NAME'];

		// $request_uri = explode('/', $request_uri);
		// $script_name = explode('/', $script_name);

		// // substract the uri request value
		// $this->page_array = array_diff($request_uri, $script_name);

		// // rearrange the key
		// $this->page_array = array_values($this->page_array);
	}

	public function load() {
		// Get the Route Rules Set
		$this->routes = require DD . '/app/routes.php';

		// Request Context
		$this->context->fromRequest($this->request);

		// URL Matching
		$matcher = new UrlMatcher($this->routes, $this->context);
	
		try {
			$this->request->attributes->add($matcher->match($this->path_info)); // ******* Important *******
			$controller = $this->resolver->getController($this->request);
			$arguments = $this->resolver->getArguments($this->request, $controller);
			
			$response_content = call_user_func_array($controller, $arguments);
			$response = new Response($response_content, 200);

		} catch (Routing\Exception\ResourceNotFoundException $e) {
			$response = new Response('Not Found', 404);
		} catch (Exception $e) {
			$response = new Response('An error occured!', 500);
		}
		$response->send();
		
	}

	public function start() {
// 		$request = Request::createFromGlobals();
// 		$name = $request->query->get('name');
// 		echo $name;
// 		$request->query->set('name', 'Soe Thiha Naung');
// 		echo $request->query->get('name');
// 		$html = <<<EOT
// 		<!doctype html>
// 		<html lang="en">
// 		<head>
// 			<meta charset="UTF-8">
// 			<title>Hello from Response</title>
// 		</head>
// 		<body>
// 			<h1>How are you</h1>
// 		</body>
// 		</html>
// EOT;
// 		$response = new Response($html, 200);
// 		$response->send();
		$this->page_array = explode('/', $this->path_info);

		if($this->page_array[1] == '') {
			$this->page_array[1] = 'home';
		} 

		$rules = include DD . '/app/routes.php';

		if(array_key_exists($this->page_array[1], $rules)) {
			$route = $rules[$this->page_array[1]];
			$controller = explode('@', $route['controller']);
			call_user_func_array(array($controller[0], $controller[1]), array());	
		} else {
			http_response_code(404);
			\View::make('404');
		}
	}
}

?>
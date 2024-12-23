<?php

$dispatcher = FastRoute\simpleDispatcher(function (FastRoute\RouteCollector $r) {
	$r->addRoute('GET', '/', function ($ROUTE_PARAMS) {
		include('pages/index.php');
	});

	$r->addRoute('GET', '/about', function ($ROUTE_PARAMS) {
		include('pages/about.php');
	});

	$r->addRoute('GET', '/ipsum', function ($ROUTE_PARAMS) {
		include('pages/ipsum.php');
	});
});

// Fetch method and URI from somewhere
$httpMethod = $_SERVER['REQUEST_METHOD'];
$uri = $_SERVER['REQUEST_URI'];

// Strip query string (?foo=bar) and decode URI
if (false !== $pos = strpos($uri, '?')) {
	$uri = substr($uri, 0, $pos);
}
$uri = rawurldecode($uri);

$routeInfo = $dispatcher->dispatch($httpMethod, $uri);
switch ($routeInfo[0]) {
	case FastRoute\Dispatcher::NOT_FOUND:
		http_response_code(404);
		die('Not found...');
		break;
		// case FastRoute\Dispatcher::METHOD_NOT_ALLOWED:
		// 	$allowedMethods = $routeInfo[1];
		// 	// ... 405 Method Not Allowed
		// 	break;
	case FastRoute\Dispatcher::FOUND:
		$routeInfo[1]($routeInfo[2]);
		break;
}

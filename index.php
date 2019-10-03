<?php

include_once 'Request.php';
include_once 'Router.php';
$router = new Router(new Request);

$router->get('/', function()
{
	return "<h1>Hello world</h1>";
});

$router->get('/profile', function($request)
{
	return "<h1>Profile</h1>";
});

$router->post('/data', function($request)
{
	return json_encode($request->getBody());
});

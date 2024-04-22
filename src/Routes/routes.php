<?php

// This file is used to define custom routings.
// To create a new route simply call the addRoute method of the Router class. 
// You can then define your custom route based on the following parameters:
// Routes should match according to the type of service or what the web page is supposed to do.
use MVC\Routes\Router;
use MVC\Controllers\LoginController;

$router = new Router();
$login = new LoginController();

$router->addRoute('/Time-Tracker/', LoginController::class, 'index');

return $router;
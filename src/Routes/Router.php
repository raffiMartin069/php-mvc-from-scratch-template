<?php

namespace MVC\Routes;

// This file is used to addRoutings based on the parameters defined in routes.php.
// This file is responsible for dispatching the routes to the correct controller and action.
// When a route is defined (routes.php), the process will be handled by addRoute,
// afterwards it will be served to the client side PROVIDED that the route is found.
// dispatch method is responsible for handling the route and serving it to the client side.
class Router {
    protected $routes = [];

    public function addRoute($route, $controller, $action) {
        $this->routes[$route] = ['controller' => $controller, 'action' => $action];
    }

    public function dispatch($uri) {
        if (array_key_exists($uri, $this->routes)) {
            $controller = $this->routes[$uri]['controller'];
            $action = $this->routes[$uri]['action'];

            $controller = new $controller();
            $controller->$action();
        } else {
            throw new \Exception("No route found for URI: $uri");
        }
    }
}
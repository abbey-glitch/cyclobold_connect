<?php
// Router.php - Class to handle routing

namespace App;

class Router
{
    // Array to store routes
    protected $routes = [];

    // Method to add a route
    private function addRoute($route, $controller, $action, $method)
    {
        // Store route details in the routes array
        $this->routes[$method][$route] = ['controller' => $controller, 'action' => $action];
    }

    // Method to define a GET route
    public function get($route, $controller, $action)
    {
        $this->addRoute($route, $controller, $action, "GET");
    }

    // Method to define a POST route
    public function post($route, $controller, $action)
    {
        $this->addRoute($route, $controller, $action, "POST");
    }

    // Method to dispatch routes
    public function dispatch()
    {
        // Get the requested URI and method
        $uri = strtok($_SERVER['REQUEST_URI'], '?');
        $method = $_SERVER['REQUEST_METHOD'];

        // Check if the requested route exists
        if (array_key_exists($uri, $this->routes[$method])) {
            // Retrieve controller and action for the route
            $controller = $this->routes[$method][$uri]['controller'];
            $action = $this->routes[$method][$uri]['action'];

            // Create an instance of the controller and call the action
            $controller = new $controller();
            $controller->$action();
        } else {
            // Throw an exception if route not found
            throw new \Exception("No route found for URI: $uri");
        }
    }
}
<?php
namespace Henry;
class Router{
    protected $routes = [];
    private function getroute($uri, $controllers, $methods, $action){
        $this->routes[$methods][$action] = ['controller'=>$controllers, 'action'=>$action];
    }
    // call a get route to access the route settting
    public function get($uri, $controllers, $method, $action){
        $this->getroute($uri, $controllers, $method, $action, "GET");
    }
    public function post($uri, $controllers, $method, $action){
        $this->getroute($uri, $controllers, $method, $action, "POST");
    }

    public function distpatch($uri, $controllers, $method, $action){
        $uri = strtok($_SERVER["REQUEST_URI"], "?");
        $method = $_SERVER['REQUEST_METHOD'];
        if(array_key_exists($uri, $this->routes[$method])){
            $controllers = $this->routes[$method][$uri]['controller'];
            $action = $this->routes[$method][$uri]['action'];
            $controllers = new $controllers();
            $controllers->$action();
        }else{
            throw new \Exception("request uri not found: $uri");
        }
    }

}
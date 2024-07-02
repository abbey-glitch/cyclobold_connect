<?php

use App\Controllers\HomeController;
use App\Router;

//create a router
$router = new Router();

//define the route
$router->get("/", HomeController::class, "index");

// run the router
$router->dispatch();

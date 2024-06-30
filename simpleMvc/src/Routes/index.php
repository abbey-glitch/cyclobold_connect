<?php
// index.php inside src/Routes/ folder

use App\Controllers\HomeController;
use App\Router;

$router = new Router();

// Define a route for the home page
$router->get('/', HomeController::class, 'index');
// Define a route for the about page
$router->get('/about', HomeController::class, 'about');
// Dispatch routes
$router->dispatch();

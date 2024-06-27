<?php

use MyNamespace\Controllers\HomeController;
use MyNamespace\Router;

$router = new Router();

$router->get('/', HomeController::class, 'index');

$router->dispatch();

<?php
// index.php - Entry point of the application

// Require the Composer autoloader to autoload classes
require '../vendor/autoload.php';

// Create an instance of Router to handle routing
$router = require '../src/Routes/index.php';
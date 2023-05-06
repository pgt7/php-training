<?php

include 'functions.php';

// get the currnet uri
$uri = $_SERVER['REQUEST_URI'];

// define all controllers and views
$routes = [
    '/' => './controller/HomeController.php',
    '' => './controller/HomeController.php',
    '/about/' => './controller/AboutController.php',
    '/about' => './controller/AboutController.php',
    '/user.php' => './controller/UsersController.php'
];

// find the controller
$controller = routeToController($uri, $routes);

// pass the specific controller if it is exist.
require($controller);
?>
<?php

function dd($value) {

    echo '<pre>';
    var_dump($value);
    die;
}

function abort($code = '404') {
    http_response_code($code);
    return './views/404.view.php';
}

function routeToController($uri, $routes) {

    $controller = array_key_exists($uri, $routes) ? $routes[$uri] : null;
    return $controller?? abort();
}

?>
<?php

$routes = require 'routes.php';


// Now we made just one line routing.
function routeToController($uri, $routes) {
    if (array_key_exists($uri, $routes)) {
        require $routes[$uri];
    } else {
        abort(404);
    }
}

//function gor errors
function abort($code = 404) {
    http_response_code(404);

    require "views/{$code}.php";

    die();
}

// Getting uri and storing it in a variable. (Adding parse_url is removeing or disallowing query's, so we can use reoute like this more secure)
$uri = parse_url($_SERVER['REQUEST_URI']) ['path'];

routeToController($uri, $routes);
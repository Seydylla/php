<?php

require "functions.php";


// Getting uri and storing it in a variable. (Adding parse_url is removeing or disallowing query's, so we can use reoute like this more secure)
$uri = parse_url($_SERVER['REQUEST_URI']) ['path'];



//Making an array to store routes.
$routes = [
    '/' => 'controllers/index.php',
    '/about' => 'controllers/about.php',
    '/contact' => 'controllers/contact.php',
];


// Now we made just one line routing.
if (array_key_exists($uri, $routes)) {
    require $routes[$uri];
} else {
    http_response_code(404);

    require 'views/404.php';

    die();
}
<?php

// Getting uri and storing it in a variable. (Adding parse_url is removeing or disallowing query's, so we can use reoute like this more secure)
$uri = parse_url($_SERVER['REQUEST_URI']) ['path'];



//Making an array to store routes.
$routes = [
    '/' => 'controllers/index.php',
    '/about' => 'controllers/about.php',
    '/notes' => 'controllers/notes.php',
    '/note' => 'controllers/note.php',
    '/contact' => 'controllers/contact.php',
];



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

routeToController($uri, $routes);
<?php


class Router {

    public $routes = [];

    public function get($uri, $controller) {
        $this->routes[] = [
            'uri' => $uri,
            'controller' => $controller,
            'method' => 'GET'
        ];
    }

    public function post($uri, $controller) {
        $this->routes[] = [
            'uri' => $uri,
            'controller' => $controller,
            'method' => 'POST'
        ];
    }

    public function delete($uri, $controller) {
        $this->routes[] = [
            'uri' => $uri,
            'controller' => $controller,
            'method' => 'Delete'
        ];
    }

    public function patch($uri, $controller) {
        $this->routes[] = [
            'uri' => $uri,
            'controller' => $controller,
            'method' => 'PATCH'
        ];
    }

    public function put($uri, $controller) {
        $this->routes[] = [
            'uri' => $uri,
            'controller' => $controller,
            'method' => 'PUT'
        ];
    }
}

// // Now we made just one line routing.
// function routeToController($uri, $routes) {
//     if (array_key_exists($uri, $routes)) {
//         // goes to the file
//         require base_path($routes[$uri]);
//     } else {
//         abort(404);
//     }
// }

// //function gor errors
// function abort($code = 404) {
//     http_response_code(404);

//     require base_path("views/{$code}.php");

//     die();
// }

// // Getting uri and storing it in a variable. (Adding parse_url is removeing or disallowing query's, so we can use reoute like this more secure)
// // Getting the file
// $routes = require base_path('routes.php');
// $uri = parse_url($_SERVER['REQUEST_URI']) ['path'];

// routeToController($uri, $routes);
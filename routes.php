<?php

//Making an array to store routes.
// return [
//     '/' => 'controllers/index.php',
//     '/about' => 'controllers/about.php',
//     '/notes' => 'controllers/notes/index.php',
//     '/note' => 'controllers/notes/note.php',
//     '/notes/create' => 'controllers/notes/create.php',
//     '/contact' => 'controllers/contact.php',
// ];

$router->get('/', 'controllers/index.php');
$router->delete('/note', 'controllers/note/destroy.php');

dd($router->routes);
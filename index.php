<?php

require "functions.php";


// Getting uri and storing it in a variable
$uri = $_SERVER['REQUEST_URI'];

if($uri === '/') {
    require 'controllers/index.php';
} else if($uri === '/contact') {
    require 'controllers/contact.php';
} else if($uri === '/about') {
    require 'controllers/about.php';
}
<?php
// Require composer autoloader
require __DIR__ . '/vendor/autoload.php';
// // Create Router instance
$router = new \Bramus\Router\Router();

$router->get('/', function () {
    echo 'Главная страница';
});
$router->get('/about', 'App\Controllers\About@index');
$router->get('/about/page/([1-9]+)', 'App\Controllers\About@page');
$router->set404(function () {
    header('HTTP/1.1 404 Not Found');
   
});

// // Run it!
$router->run();

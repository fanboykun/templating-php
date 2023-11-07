<?php 

require_once __DIR__ . '/../vendor/autoload.php';

use App\Controller\HomeController;
use App\Router\Route;

    // Route::add('GET', '/products/([0-9a-zA-Z]*)/categories/([0-9a-zA-Z]*)', ProductController::class, 'categories');

    Route::add('GET', '/', HomeController::class, 'index');
    
    Route::run();

    // $routes = Route::getEntryPoint();
    // $url = $_SERVER['REQUEST_URI'];
    // // $url = '/';
    // if (isset($routes[$url])) {
    //     $handler = $routes[$url];
    //     call_user_func($handler);
    // } else {
    //     // Handle 404 Not Found
    //     echo "Page not found.";
    // }


?>
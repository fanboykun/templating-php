<?php 

require_once __DIR__ . '/../vendor/autoload.php';

use App\Controller\HomeController;
use App\Route;

    // Route::add('GET', '/products/([0-9a-zA-Z]*)/categories/([0-9a-zA-Z]*)', ProductController::class, 'categories');

    Route::add('GET', '/', HomeController::class, 'index');
    // Route::add('GET', '/hello', HomeController::class, 'hello', [AuthMiddleware::class]);
    // Route::add('GET', '/world', HomeController::class, 'world', [AuthMiddleware::class]);
    // Route::add('GET', '/about', HomeController::class, 'about');

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

    // function homePageHandler(){
    //     require __DIR__ . '/src/app.php';
    // }


?>
<?php 
    require_once __DIR__ . '/vendor/autoload.php';
    use Src\Route;

    $routes = Route::getEntryPoint();
    $url = $_SERVER['REQUEST_URI'];
    // $url = '/';
    if (isset($routes[$url])) {
        $handler = $routes[$url];
        call_user_func($handler);
    } else {
        // Handle 404 Not Found
        echo "Page not found.";
    }

    function homePageHandler(){
        require __DIR__ . '/src/app.php';
    }


?>
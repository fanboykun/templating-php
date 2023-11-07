<?php
    namespace App\Middleware;

    use App\Interfaces\Middleware;

    class AuthMiddleware implements Middleware
    {
        function handle(): void
        {
            session_start();
            if (!isset($_SESSION['user'])) {
                header('Location: /login');
                exit();
            }
        }
    }

?>

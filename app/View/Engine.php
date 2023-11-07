<?php

namespace App\View;

class Engine
{
    public static function render(string $view, $model)
    {
        // require __DIR__ . '/../Pages/Home.php';
        // var_dump($dir);
        require __DIR__ . '/../Pages/' . $view . '.php';
    }

}
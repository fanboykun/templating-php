<?php

namespace Src;

class Route
{
    private static array $routes = [
        '/' => 'homePageHandler',
        '/about' => 'aboutPageHandler',
        '/contact' => 'contactPageHandler',
    ];

    public static function getEntryPoint()
    {
        return self::$routes;
    }
}


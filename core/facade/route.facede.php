<?php

namespace Core\Facade;

use Core\Router\Router;

class Route
{
    private static $handleRoute = new Router();

    public static function GET(string $url, $controller)
    {
        self::$handleRoute->addGet($url, $controller);
    }
    public static function POST(string $url, $controller)
    {
        self::$handleRoute->addPost($url, $controller);
    }
    public static function PUT(string $url, $controller)
    {
        self::$handleRoute->addPut($url, $controller);
    }
    public static function PATCH(string $url, $controller)
    {
        self::$handleRoute->addPath($url, $controller);
    }
    public static function DELETE(string $url, $controller)
    {
        self::$handleRoute->addPost($url, $controller);
    }
}

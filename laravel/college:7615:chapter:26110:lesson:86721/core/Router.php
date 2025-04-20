<?php

namespace Core;

class Router
{
    private static array $routes = [];

    public static function addRoute(string $uri, array $controllerAction): void
    {
        static::$routes[$uri] = $controllerAction;
    }

    public static function dispatch(string $requestUri): bool
    {
        $arr = include __DIR__ . '/../app/config.php';
        if (isset(static::$routes[$requestUri])) {
            $contoller = new static::$routes[$requestUri][0];
            $action = static::$routes[$requestUri][1];
            $contoller->$action();
    
            return true;
        }
        foreach ($arr['SERVE_DIRS'] as $a) {
            if (preg_match("/^\/$a/", $requestUri)) {
                return false;
            }
        }
        http_response_code(404);
        return true;
    }
}

<?php

namespace App\Router;

class Router
{
    public function dispatch(string $uri): void
    {
        $routes = require_once APP_PATH . '/src/config/routes.php';

        $routes[$uri]();
    }
}

<?php

namespace App\Kernel\Router;

class Router
{
    private array $routes = [
        'GET' => [],
        'POST' => [],
    ];

    public function __construct()
    {
        $routes = $this->initRoutes();     
    }

    public function dispatch(string $uri, string $method): void
    {
        $route = $this->findRoute($uri,$method);

        if(! $route){
            $this->notFound();
        }

        if(is_array($route->getAction())){
            [$controller, $action] = $route->getAction();
            $controller = new $controller();
            call_user_func([$controller, $action]);
        } else {
            call_user_func($route->getAction());
        }        
    }

    private function notFound()
    {
        echo 'ERROR 404';
        die;
    }

    private function findRoute(string $uri, string $method): Route|false
    {
        if(! isset($this->routes[$method][$uri])){
            return false;            
        }
        return $this->routes[$method][$uri];
    }

    private function initRoutes()
    {
        $routes = $this->getRoutes();

        foreach ($routes as $route){
            $this->routes[$route->getMethod()][$route->getUri()] = $route;
        }
    }

    /**
     * @return Route[]
     */
    private function getRoutes(): array
    {
        return require_once APP_PATH . '/config/routes.php';
    }
}

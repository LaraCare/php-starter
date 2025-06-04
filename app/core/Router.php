<?php
namespace App\Core;

class Router
{
    private $routes = [];

    public function get($uri, $action)
    {
        $this->routes['GET'][rtrim($uri, '/')] = $action;
    }

    public function post($uri, $action)
    {
        $this->routes['POST'][rtrim($uri, '/')] = $action;
    }

    public function dispatch($uri, $method)
    {
        $uri = parse_url($uri, PHP_URL_PATH);
        $uri = rtrim($uri, '/');

        if (isset($this->routes[$method][$uri])) {
            list($controllerName, $methodName) = explode('@', $this->routes[$method][$uri]);
            $controllerClass ="\App\Controllers\\$controllerName";
            $controller = new $controllerClass;
            return $controller->$methodName();
        } else {
            http_response_code(404);
            echo "404 Page Not Found";
        }
    }
}

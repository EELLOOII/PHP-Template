<?php

namespace App\Core;

class Router
{
    protected array $routes = [];

    public function get($uri, $action)
    {
        $this->routes['GET'][$uri] = $action;
    }

    public function dispatch()
    {
        $method = $_SERVER['REQUEST_METHOD'];
        $uri = str_replace('/iQMS/public', '', parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
        $uri = $uri ?: '/';

        $action = $this->routes[$method][$uri] ?? null;

        if (!$action) {
            http_response_code(404);
            echo "404 Not Found";
            return;
        }

        [$controller, $method] = explode('@', $action);
        $controller = "App\\Controllers\\$controller";

        call_user_func([new $controller, $method]);
    }
}

<?php

namespace App;

class Router {
    protected array $routes = [];

    private function addRoute($route, $controller, $action, $method): void {
        $this->routes[$method][$route] = ['controller' => $controller, 'action' => $action];
    }

    public function get($route, $controller, $action): void {
        $this->addRoute($route, $controller, $action, "GET");
    }

    public function dispatch(): void {
        $uri = strtok($_SERVER['REQUEST_URI'], '?');
        $method = $_SERVER['REQUEST_METHOD'];

        foreach ($this->routes[$method] as $route => $routeDetails) {
            $routePattern = preg_replace('/\:(\w+)/', '(?P<$1>[^/]+)', $route);
            $regex = "#^$routePattern$#";

            if (preg_match($regex, $uri, $matches)) {
                $controller = $routeDetails['controller'];
                $action = $routeDetails['action'];

                $params = [];
                foreach ($matches as $key => $value) {
                    if (!is_numeric($key)) {
                        $params[$key] = $value;
                    }
                }

                $controllerInstance = new $controller();
                call_user_func_array([$controllerInstance, $action], $params);
                
                return;
            }
        }

        throw new \Exception("No route found for URI: $uri");
    }
}
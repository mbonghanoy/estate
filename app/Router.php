<?php

namespace Estate;

use Estate\Models\Contact;

class Router
{
    protected $uri;
    protected $routes;

    public function __construct($uri)
    {
        $this->uri = trim($uri, '/');
    }

    public function get($uri, $controller)
    {
        $this->routes[] = [
            'uri' => $uri,
            'controller' => $controller
        ];
    }

    public function getRoutes()
    {
        return $this->routes;
    }

     public function post($controller)
    {
        list($controller, $method) = explode('::', $controller);

        $controller = "\Estate\Controllers\\$controller";
        $controller = new $controller;

        return $controller->$method();
    }

    public function fire()
    {
        foreach($this->routes as $route) {
            if ($this->uri === $route['uri']) {
                if ($route['controller'] instanceof \Closure) {
                    return $route['controller']();
                }

                list($controller, $method) = explode('::', $route['controller']);

                $controller = "\Estate\Controllers\\$controller";

                $controller = new $controller;

                return $controller->$method();
            }
        }

        require_once(__DIR__ . '/../views/404.html');
    }
}
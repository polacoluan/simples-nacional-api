<?php

namespace Core;

class Route
{

    public $routes = [];

    public function addRoute($httpMethod, $uri, $controller)
    {
        if (is_string($controller)) {
            $data = [
                "class" => $controller,
                "method" =>  "__invoke"
            ];
        }

        if (is_array($controller)) {
            $data = [
                "class" => $controller[0],
                "method" =>  $controller[1]
            ];
        }


        $this->routes[$httpMethod][$uri] = $data;
    }

    public function get($uri, $controller)
    {
        $this->addRoute('GET',  $uri, $controller);

        return $this;
    }

    public function post($uri, $controller)
    {
        $this->addRoute('POST',  $uri, $controller);

        return $this;
    }

    public function run()
    {
        $path = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH) ?? '/';

        $script = $_SERVER['SCRIPT_NAME'] ?? '';
        if ($script && strpos($path, $script) === 0) {
            $path = substr($path, strlen($script));
        }

        $uri = '/' . ltrim($path, '/');
        if ($uri === '') {
            $uri = '/';
        }

        $httpMethod = $_SERVER["REQUEST_METHOD"] ?? 'GET';

        if (!isset($this->routes[$httpMethod][$uri])) {
            return;
        }

        $routeInfo = $this->routes[$httpMethod][$uri];
        $class = $routeInfo['class'];
        $method = $routeInfo['method'];

        $c = new $class;
        $c->$method();
    }
}

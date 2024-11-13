<?php

namespace App\Core;

class Router {
    
    protected $routes = [];

    // Phương thức thêm định tuyến
    public function add($method, $route, $action) {
        $this->routes[] = compact('method', 'route', 'action');
    }

    // Phương thức xử lý yêu cầu
    public function dispatch($url, $method) {
        foreach ($this->routes as $route) {
            if ($route['method'] == $method && $route['route'] == $url) {
                $this->callAction($route['action']);
                return;
            }
        }
        
        // Nếu không tìm thấy route
        echo "Route not found.";
    }

    // Phương thức gọi hành động (controller và method)
    private function callAction($action) {
        list($controller, $method) = explode('@', $action);
        $controller = "App\\Controllers\\$controller";
        $controllerObj = new $controller();
        $controllerObj->$method();
    }
}

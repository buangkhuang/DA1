<?php
use App\Core\Router;
// Khởi động router và điều hướng yêu cầu
$router = new Router();

// Cấu hình route
$router->add('GET', '/manga_shop/categories', 'CategoryController@index');         // Hiển thị danh mục
$router->add('GET', '/manga_shop/categories/create', 'CategoryController@create'); // Hiển thị form thêm danh mục
$router->add('POST', '/manga_shop/categories/store', 'CategoryController@store');  // Xử lý thêm danh mục
$router->add('GET', '/manga_shop/categories/edit/{id}', 'CategoryController@edit'); // Hiển thị form sửa danh mục
$router->add('POST', '/manga_shop/categories/update/{id}', 'CategoryController@update'); // Xử lý cập nhật danh mục
$router->add('GET', '/manga_shop/categories/delete/{id}', 'CategoryController@delete'); // Xử lý xóa danh mục
$router->add('GET', '/products', 'ProductController@index');
$router->add('GET', '/users', 'UserController@index');
$router->add('GET', '/payments', 'PaymentController@index');
$router->add('GET', '/orders', 'OrderController@index');

// Lấy URL hiện tại và phương thức HTTP
$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$method = $_SERVER['REQUEST_METHOD'];

// Dispatch route
$router->dispatch($url, $method);

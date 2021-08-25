<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Solikin\PHP\MVC\App\Router;
use Solikin\PHP\MVC\Controller\HomeController;
use Solikin\PHP\MVC\Controller\ProductController;
use Solikin\PHP\MVC\Middleware\AuthMiddleware;

//$path = '/index';
//
//if (isset($_SERVER['PATH_INFO'])){
//    $path = $_SERVER['PATH_INFO'];
//}
//
//require_once __DIR__ . '/../app/View' . $path . '.php';


Router::add('GET', '/', HomeController::class, 'Index');
Router::add('GET', '/hello', HomeController::class, 'hello', [AuthMiddleware::class]);
Router::add('GET', '/world', HomeController::class, 'world', [AuthMiddleware::class]);
Router::add('GET', '/about', HomeController::class, 'author');
Router::add('GET', '/author', HomeController::class, 'author');
Router::add('GET', '/products/([0-9a-zA-Z]*)/categories/([0-9a-zA-Z]*)', ProductController::class, 'categories');

Router::run();
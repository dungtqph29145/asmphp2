<?php

use App\Controllers\CustomerController;
use App\Controllers\ProductController;
use App\Controllers\CategoryController;
use App\Controllers\UserController;
use App\Controllers\StudentController;
use Phroute\Phroute\RouteCollector;

$url = !isset($_GET['url']) ? "/" : $_GET['url'];

$router = new RouteCollector();

// filter check đăng nhập
$router->filter('auth', function(){
    if(!isset($_SESSION['auth']) || empty($_SESSION['auth'])){
        header('location: ' . BASE_URL . 'login');die;
    }
});
//khu vực cần quan tâm---------------
// bắt đầu định nghĩa ra các đường dẫn
$router->get('/', function(){
    return "trang chủ";
});
/////
//định nghĩa đường dẫn trỏ đến Product Controller
//prodcuct
$router->get('list-product', [ProductController::class,'index']);
$router->get('add-product', [ProductController::class,'addProduct']);
$router->post('post-product', [ProductController::class,'postProduct']);
$router->get('detail-product/{id}', [ProductController::class,'detail']);
$router->post('edit-product/{id}', [ProductController::class,'editProduct']);
$router->get('delete-product/{id}', [ProductController::class,'delete']);
//category
$router->get('list-category',[CategoryController::class,'index']);
$router->get('add-category',[CategoryController::class,'addCategory']);
$router->post('post-category',[CategoryController::class,'postCategory']);
$router->get('detail-category/{id}',[CategoryController::class,'detail']);
$router->post('edit-category/{id}',[CategoryController::class,'editcategory']);
$router->get('delete-category/{id}',[CategoryController::class,'delete']);

//user
$router->get('list-user',[UserController::class,'index']);
$router->get('add-user',[UserController::class,'addUser']);
$router->post('post-user',[UserController::class,'postUser']);
$router->get('detail-user/{id}',[UserController::class,'detail']);
$router->post('edit-user/{id}',[UserController::class,'editUser']);
$router->get('delete-user/{id}',[UserController::class,'delete']);

//student
$router->get('list-student',[StudentController::class,'index']);
$router->get('add-student',[StudentController::class,'addStudent']);
$router->post('post-student',[StudentController::class,'postStudent']);
$router->get('detail-student/{id}',[StudentController::class,'detail']);
$router->post('edit-student/{id}',[StudentController::class,'editStudent']);
$router->get('delete-student/{id}',[StudentController::class,'delete']); 


// $router->get('details-product/{id}/{hihi}', [ProductController::class,'detail']);
// $router->get('details-custom/{id}/{haha}', [CustomerController::class,'detail']);
// $router->get('test', [App\Controllers\ProductController::class, 'index']);
$router->get('customer',[CustomerController::class,'customer']);
# NB. You can cache the return value from $router->getData() so you don't have to create the routes each request - massive speed gains
$dispatcher = new Phroute\Phroute\Dispatcher($router->getData());

$response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], $url);

// Print out the value returned from the dispatched function
echo $response;


?>
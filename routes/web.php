<?php 
use app\controllers\AuthController;
use app\controllers\SiteController;

// $app->router->get('/', function (){
//     return 'Hello World!';
// });
// $app->router->get('/contact', 'contact'); // Renders view directly.

$app->router->get('/', [SiteController::class, 'index']); 
$app->router->get('/contact', [SiteController::class, 'contact']); 
$app->router->post('/contact', [SiteController::class, 'contact']); 

$app->router->get('/login', [AuthController::class, 'login']); 
$app->router->post('/login', [AuthController::class, 'login']); 
$app->router->get('/register', [AuthController::class, 'register']); 
$app->router->post('/register', [AuthController::class, 'register']); 
$app->router->get('/logout', [AuthController::class, 'logout']); 
$app->router->get('/profile', [AuthController::class, 'profile']); 
$app->router->get('/test', function ()
{
    echo "Hello";
});

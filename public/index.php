<?php 

require_once __DIR__.'/../vendor/autoload.php';

use app\controllers\SiteController;
use app\core\Application;

$app = new Application(dirname(__DIR__));


// $app->router->get('/', function (){
//     return 'Hello World!';
// });
$app->router->get('/', [SiteController::class, 'index']); 

// $app->router->get('/contact', 'contact'); // Renders view directly.
$app->router->get('/contact', [SiteController::class, 'contact']); 

$app->router->post('/contact', [SiteController::class, 'store']); 

$app->run();
<?php 

require_once __DIR__.'/../vendor/autoload.php';

use app\controllers\SiteController;
use app\core\Application;

$app = new Application(dirname(__DIR__));


// $app->router->get('/', function (){
//     return 'Hello World!';
// });
$app->router->get('/', [new SiteController(), 'index']); // For PHP 7, Can be called like [SiteController::class, 'index']

// $app->router->get('/contact', 'contact'); // Renders view directly.
$app->router->get('/contact', [new SiteController(), 'contact']); // For PHP 7, Can be called like [SiteController::class, 'contact']

$app->router->post('/contact', [new SiteController(), 'store']); // For PHP 7, Can be called like [SiteController::class, 'store']

$app->run();
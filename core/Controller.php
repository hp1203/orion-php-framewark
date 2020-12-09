<?php 

namespace app\core;
use app\core\Application;
/**
 * Class Controller
 * 
 * @author Himanshu Purohit <himanshu1203@gmail.com>
 * @package app\core
 */

 class Controller
 {
    public function render($view, $params = [])
    {
        return Application::$app->router->renderView($view, $params);
    }
 }
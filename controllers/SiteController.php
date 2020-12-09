<?php 

namespace app\controllers;
use app\core\Application;

/**
 * Class SiteController
 * 
 * @author Himanshu Purohit <himanshu1203@gmail.com>
 * @package app\controllers
 */

class SiteController 
{
    public function index()
    {
        $params = [
            'name' => 'Himanshu Purohit',
        ];
        return Application::$app->router->renderView('home', $params);
    }

    public function contact()
    {
        return Application::$app->router->renderView('contact');
    }


    public function store()
    {
        return "Handling Submitted Data";
    }
}

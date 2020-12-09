<?php 

namespace app\controllers;
use app\core\Application;
use app\core\Controller;
use app\core\Request;
/**
 * Class SiteController
 * 
 * @author Himanshu Purohit <himanshu1203@gmail.com>
 * @package app\controllers
 */

class SiteController extends Controller
{
    public function index()
    {
        $params = [
            'name' => 'Himanshu Purohit',
        ];
        return $this->render('home', $params);
    }

    public function contact()
    {
        return $this->render('contact');
    }


    public function store(Request $request)
    {
        $body = $request->getBody();
        var_dump($body);
        return "Handling Submitted Data";
    }
}

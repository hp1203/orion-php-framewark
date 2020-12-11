<?php 

namespace app\controllers;
use app\core\Application;
use app\core\Controller;
use app\core\Request;
/**
 * Class AuthController
 * 
 * @author Himanshu Purohit <himanshu1203@gmail.com>
 * @package app\controllers
 */

class AuthController extends Controller
{
    public function login()
    {   
        $this->setLayout('auth');
        return $this->render('login');
    }

    public function register(Request $request)
    {
        if($request->isPost()){
            $body = $request->getBody();
            var_dump($body);
        }
        $this->setLayout('auth');
        return $this->render('register');
    }
}
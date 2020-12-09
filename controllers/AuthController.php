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
        return $this->render('login');
    }

    public function register(Request $request)
    {
        if($request->isPost()){
            return 'Submitted Data';
        }
        return $this->render('register');
    }
}
<?php 

namespace app\controllers;
use app\core\Application;
use app\core\Controller;
use app\core\Request;
use app\models\RegisterModel;
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
        $this->setLayout('auth');
        $registerModel = new RegisterModel();
        if($request->isPost()){
            $registerModel->loadData($request->getBody());
            if($registerModel->validate() && $registerModel->register()){
                return "success";
            }
            var_dump($registerModel->errors);
            // var_dump($body);
            return $this->render('register', [
                'model' => $registerModel
            ]);
        }
        return $this->render('register');
    }
}
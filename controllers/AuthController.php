<?php 

namespace app\controllers;
use app\models\User;
use app\core\Request;
use app\core\Controller;
use app\core\Application;
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
        $user = new User();
        if($request->isPost()){
            $user->loadData($request->getBody());
            if($user->validate() && $user->save()){
                return "success";
            }
            // var_dump($user->errors);
            // var_dump($body);
            return $this->render('register', [
                'model' => $user
            ]);
        }
        return $this->render('register', [
            'model' => $user
        ]);
    }
}
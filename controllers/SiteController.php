<?php 

namespace app\controllers;
use himanshupurohit\orion\Request;
use himanshupurohit\orion\Response;
use himanshupurohit\orion\Controller;
use himanshupurohit\orion\Application;
use app\models\ContactForm;
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

    public function contact(Request $request, Response $response)
    {
        $contact = new ContactForm();
        if($request->isPost()){
            $contact->loadData($request->getBody());
            if($contact->validate() && $contact->send()){
                Application::$app->session->setFlash('success', 'Thanks for contacting us.');
                return $response->redirect('/contact');
            }
        }
        return $this->render('contact', [
            'model' => $contact
        ]);
    }
   
}

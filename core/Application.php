<?php 

namespace app\core;
/**
 * Class Application
 * 
 * @author Himanshu Purohit <himanshu1203@gmail.com>
 * @package app\core
 */
class Application 
{
    public Router $router;
    public function __construct()
    {
        $this->router = new Router();
    }

    public function run()
    {
        //TODO
    }
}
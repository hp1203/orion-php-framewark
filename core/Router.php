<?php 

namespace app\core;
/**
 * Class Router
 * 
 * @author Himanshu Purohit <himanshu1203@gmail.com>
 * @package app\core
 */
class Router 
{
    public Request $request;
    public Response $response;
    protected array $routes = [];

    /**
     * Router Constructor.
     * 
     * @param app\core\Request $request
     * * @param app\core\Response $response
     */

    public function __construct(Request $request, Response $response)
    {
        $this->request = $request;
        $this->response = $response;
    }

    public function get($path, $callback)
    {
        $this->routes['get'][$path] = $callback;
    }

    public function post($path, $callback)
    {
        $this->routes['post'][$path] = $callback;
    }

    public function resolve()
    {
        $path = $this->request->getPath();
        $method = $this->request->method();
        // echo "<pre>";
        // var_dump($this->routes);
        // echo "</pre>";
        // exit;
        $callback = $this->routes[$method][$path] ?? false;
        // echo "<pre>";
        // var_dump($callback);
        // echo "</pre>";
        // exit;
        if($callback === false){
            $this->response->setStatusCode(404);
            return  $this->renderView("_404");
            exit;
        }
        if(is_string($callback)){
            return $this->renderView($callback);
        }
        if(is_array($callback)){
            Application::$app->controller = new $callback[0]();
            Application::$app->controller->action = $callback[1];
            
            foreach(Application::$app->controller->getMiddlewares() as $middleware){
                $middleware->execute();
            }
            $callback[0] = Application::$app->controller;
        }
        return  call_user_func($callback, $this->request, $this->response);
    }

    public function renderView($view, $params = [])
    {
        $layoutContent = $this->layoutContent();
        $viewContent = $this->renderOnlyView($view, $params);
        return str_replace('{{content}}', $viewContent, $layoutContent);
    }

    public function renderNotFound($viewContent)
    {
        $layoutContent = $this->layoutContent();
        return str_replace('{{content}}', $viewContent, $layoutContent);
    }

    public function layoutContent()
    {
        $layout = Application::$app->layout;
        if(Application::$app->controller){
            $layout = Application::$app->controller->layout;
        }
        ob_start();
        include_once Application::$ROOT_DIR."/views/layouts/$layout.php";
        return ob_get_clean();
    }

    protected function renderOnlyView($view, $params)
    {
        // foreach($params as $key => $value){
        //     // echo $key;
        //     // $$Key = $value;
        // }
        extract($params);
        // echo $name;
        ob_start();
        include_once Application::$ROOT_DIR."/views/$view.php";
        return ob_get_clean();
    }
}
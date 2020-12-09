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
        $method = $this->request->getMethod();
        // echo "<pre>";
        // var_dump($this->routes);
        // echo "</pre>";
        // exit;
        $callback = $this->routes[$method][$path] ?? false;
        if($callback === false){
            $this->response->setStatusCode(404);
            return  $this->renderView("_404");
            exit;
        }
        if(is_string($callback)){
            return $this->renderView($callback);
        }
        return  call_user_func($callback);
    }

    public function renderView($view)
    {
        $layoutContent = $this->layoutContent();
        $viewContent = $this->renderOnlyView($view);
        return str_replace('{{content}}', $viewContent, $layoutContent);
    }

    public function renderNotFound($viewContent)
    {
        $layoutContent = $this->layoutContent();
        return str_replace('{{content}}', $viewContent, $layoutContent);
    }

    public function layoutContent()
    {
        ob_start();
        include_once Application::$ROOT_DIR."/views/layouts/main.php";
        return ob_get_clean();
    }

    protected function renderOnlyView($view)
    {
        ob_start();
        include_once Application::$ROOT_DIR."/views/$view.php";
        return ob_get_clean();
    }
}
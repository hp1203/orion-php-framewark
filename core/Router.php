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
    protected array $routes = [];

    /**
     * Router Constructor.
     * 
     * @param app\core\Request $request
     */

    public function __construct(\app\core\Request $request)
    {
        $this->request = $request;
    }

    public function get($path, $callback)
    {
        $this->routes['get'][$path] = $callback;
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
            return  "Not Found";
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
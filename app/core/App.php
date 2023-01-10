<?php
// Define the App class
class App
{
    // new comment
    //property
    protected $controller = 'Home'; // protected with default method home
    protected $method = 'index';
    protected $params = []; //protected with parameter array

    public function __construct()
    {
        // Parse the URL and store the result in a variable
        $url = $this->parseURL();

        /*
        controllers */
        if (file_exists('../app/controllers/' . $url[0] . '.php')) {
            //if we write about -> about will be a new controller
            $this->controller = $url[0];
            // the memory that was being used by the variable or array element is now free to be used by other processes, but the data itself is not deleted.
            unset($url[0]);
        }

        //method call the controller and combine with controller
        // we initiatte the class so we can call the method later
        require_once '../app/controllers/' . $this->controller . '.php';
        $this->controller = new $this->controller; //$this->controller is object

        /*method: determine which method should be called on a controller object based on the URL.*/
        //check if the element exist
        if (isset($url[1])) {
            if (method_exists($this->controller, $url[1])) {
                $this->method = $url[1];
                unset($url[1]);
            }
        }

        // params
        //checking if the $urlarray is not empty.
        if (!empty($url)) {
            $this->params = array_values($url);
        }

        //Run controller, method , and send params if exist using function
        call_user_func_array([$this->controller, $this->method], $this->params);
    }

    //def
    public function parseURL()
    {
        if (isset($_GET['url'])) {
            $url = rtrim($_GET['url'], '/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/', $url);
            return $url;
        }
    }
}

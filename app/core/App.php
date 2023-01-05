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
        //if file exist (..)means we go to the prev folder
        //The [0] means to access the first element of the array.
        //file_exists() function takes a single argument, which is the path of the file to check, and returns true if the file exists, or false if it does not.
        */
        if (file_exists('../app/controllers/' . $url[0] . ' .php')) {
            //if we write about -> about will be a new controller
            $this->controller = $url[0];
            // the memory that was being used by the variable or array element is now free to be used by other processes, but the data itself is not deleted.
            unset($url[0]);
        };

        //call the controller and combine with controller
        // we initiatte the class so we can call the method later
        require_once '../controllers' . $this->controller . '.php';
        $this->controller = new $this->controller; //$this->controller is object

        /*method*/
        //if exist
        if (isset($url[1])) {
            if (method_exists($this->controller, $url[1])) {
                $this->method = $url[1];
            }
        }
    }


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

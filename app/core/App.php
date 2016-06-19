<?php

/*
 * Core directory stores app and controller
 * App is instantiated within the bootstrapped file
 * It gives the url splitting or routing and
 * handles the controllers
 */

class App
{
    // Default controller that we run
    protected $controller = 'home';
    // Default method that we run
    protected $method = 'index';
    /* We need to take into accounts parameters that we pass through the url
       let's set params as an empty array */
    protected $params = [];

    // Inside __contruct, we'll parse our url
    public function __construct()
    {
        // We set the url
        $url = $this->parseUrl();

        // To check if it works #2 : print_r($url);

        // We first check if the controller exists
        if(file_exists('../app/controllers/'.$url[1].'.php'))
        {
            $this->controller = $url[1];
            // We want to remove it from the array
            unset($url[1]);
        }

        /* We then require the file,
         * that means if the Blabla file doesn't exit it returns home by default as set above
         */
        require_once '../app/controllers/'.$this->controller.'.php';

        // to check if it works #1 (+ #2 above) : echo $this->controller;

        // If the file exists, then we want a new instance or object
        $this->controller = new $this->controller;

        // To check if it works : var_dump($this->controller);

        // We now want to check if the parameter is passed
        if(isset($url[2]))
        {
            // 1st parameter : object or class name we want to check
            if(method_exists($this->controller, $url[2]))
            {
                // To check if the condition works : echo 'OK'; (+ echo 'home/index'; in core/App.php)

                // We want to set the method we created above
                $this->method = $url[2];
                unset($url[2]);
            }
        }

        // To check if the 2nd condition works : print_r($url); and enter /public/blabla

        // We now need to set the parameters, $this->params becomes [1]
        $this->params = $url ? array_values($url) : [];

        // To check if it works : print_r($this->params);

        /* Takes an array containing the controller and the method
         * The 2nd parameter is the parameter we want to pass through
         */
        call_user_func_array([$this->controller, $this->method], $this->params);
    }

    // Involve exploding and trimming the url, and give the path
    public function parseUrl()
    {
        if(isset($_GET['url']))
        {
            // To check if it works : echo $_GET['url'];

            /* Check if the url has been accessed
             * If the url has a trailing slash, trim is going to catch another element
             * to be added to the array when we explode this
             * Basically, it checks in the order if public directory exists,
             * then if the home controller does too,
             * as well as the index method and the parameter such as Pierre for instance
             */
            return $url = explode('/', filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL));
        }
    }
}
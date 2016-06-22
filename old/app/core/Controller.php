<?php

class Controller {

    // method that allows to load a model
    public function model($model)
    {
        /* To check if home.php controller and User.php model work when
         * we send $this->model('User'); to home.php and public $name to User.php : echo $model;
         */
        require_once '../app/models/'.$model.'.php';
        return new $model();
    }

    public function view($view, $data = [])
    {
        require_once '../app/views/'.$view.'.php';
    }
}

/* Tuto Graphikart

class Controller {

    var $vars = array();
    // Only one part of the view is changed, not the whole design
    var $layout ='default';

    function set($d){
        // Fusion sent data with data already presents in this variable
        $this->vars = array_merge($this->vars,$d);
    }

    // Include the file that fits
    function render($filename) {

        // Extract data from vars array
        extract($this->vars);
        ob_start();
        // To find the file to include
        require(ROOT.'View/'.get_class($this).'/'.$filename.'.php');
        // Push variables to the view
        $content_for_layout = ob_get_clean();
        if ($this->layout == false) {
             echo $content_for_layout;
        }
        else {
            require(ROOT.'View/layout/'.$this->layout.'/'.$filename.'.php');
        }
    }

    function loadModel($name){
        // Include the model only once
        require_once(ROOT.'Model/'.strtolower($name).'.php');
        // New variable in this, initialize the model
        $this->$name = new $name();
    }
}

*/
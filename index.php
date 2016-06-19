<?php

/*

index.php : Shunt and load every controller and model

url : localhost/Tuto/mvc/tutoriels/index
where tutoriels = name of the controller
and index = name of the action

.htaccess : redirect only url that contain
alphanumerics and special symbols
where p = name of the page we are calling

*/

// Indicate the url related to its root
define('WEBROOT',str_replace('index.php','',$_SERVER['SCRIPT_NAME']));
// Contain the file directory on the server
define('ROOT',str_replace('index.php','',$_SERVER['SCRIPT_FILENAME']));

// Include every file from Core directory
require(ROOT.'Core/model.php');
require(ROOT.'Core/controller.php');

// Connexion to database
mysql_connect('localhost','root','root');
// Select the database
mysql_select_db('open_classroom');

// Detect url and find good parameters
$params = explode('/',$_GET['p']);
// Retrieve controller
$controller = $params[0];
// Retrieve action and charge params by default if doesn't find the file
$action = isset($params[1]) ? $params[1] : 'index';

// Controller included
require('Controller/'.$controller.'.php');
// Controller initialized
$controller = new $controller();

//   BUG FROM HERE...

// Verification of the method existence
if(method_exists($controller, $action)){
    // Call of the action
    $controller->$action();
}
else {
    echo 'error 404';
}

/*
session_start();

// Session_destroy();

require_once ('Model/basicController.php');
require_once ('Include/configuration.php');
require_once ('Lib/smarty-3.1.29/libs/Smarty.class.php');

// Smarty is instantiated

$Smarty = new Smarty();

// Definition of every possible action in one page

if (!empty($_GET['action']) && array_key_exists($_GET['action'], $legalActions) == true) {
    $action = $_GET['action'];
}
else{
    if (empty($_GET['action'])) {
        $action = 'home';
    }
    else {
        $template = "404";
    }
}

if (file_exists('Controller/'.$legalActions[$action].'Controller.php')) {
    include 'Controller/'.$legalActions[$action].'Controller.php';
}else{
    $template = "404";
}

// Display Smarty Templates

$Smarty->display('View/header.tpl');
$Smarty->display('View/Template/'.$template.'.tpl');
$Smarty->display('View/footer.tpl');

*/
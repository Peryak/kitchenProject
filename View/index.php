<?php

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
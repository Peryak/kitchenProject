<?php

/*
 * Index is the users page landing
 *
 * .htaccess file rewrites the url and parses it as a $_GET url
 *  and disallow the access to some specific directories or files
 */

// Initialisation file
require_once '../app/init.php';
require_once ('../app/lib/smarty-3.1.29/libs/Smarty.class.php');

$app = new App();

// Smarty is instantiated
$Smarty = new Smarty();

// Display Smarty Templates
$Smarty->display('../app/views/home/header.tpl');
$Smarty->display('../app/views/home'.$template.'.tpl');
$Smarty->display('../app/views/home/footer.tpl');
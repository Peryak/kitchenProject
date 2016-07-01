<?php

session_start();

require_once('handler/connection.php');

// index.php file is going to receive all the requests
// This means that every link would have to point to /?x=y or /index.php?x=y
// The if statement is gonna check whether we have the parameters controller
// and action set and store them in variables
// If we do not have such parameters we just make pages the default controller and home the default action
// Every request when hiting our index file is going to be routed to
// a controller (just a file defining a class) and an action in that controller (just a method)

if (isset($_GET['controller']) && isset($_GET['action'])) {
    $controller = $_GET['controller'];
    $action     = $_GET['action'];
} else {
    $controller = 'pages';
    $action     = 'home';
}

// Finally we require the only part of our application that does not (theoretically) change: the layout

require_once('views/layout.php');
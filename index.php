<?php
$controllers = $_GET["control"];
$action = $_GET['func'];
include "./controllers/".$controllers."Controller.php";
$test = new $controllers();
$test->$action();
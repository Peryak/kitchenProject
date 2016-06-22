<?php

require_once 'kitchenProject/handler/UserHandler.php';
$u = new User(0, 'blabla', 10, 'toto');
UserHandler::create($u);
var_dump($u);
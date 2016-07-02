<?php

require_once "./models/Read.php";
require_once "./handler/connection.php";

$pdo = Database::connect();

$var = new Read();
$var->tab = $var->receiptAction($pdo, 'recette de test');

var_dump($var->tab);

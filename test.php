<?php
require_once "./models/Read.php";
require_once "./handler/connection.php";
$pdo = Database::connect();
$var = new Read();
$tab = $var->receiptAction($pdo, 'recette de test');
var_dump($tab);
//$arres = $var->tab[1];
$recp = $tab->get();
var_dump($recp);
$t = 0;
foreach ($recp as $key) {
  if(is_array($key)){
    //$key = $key->get();
    foreach ($key as $r) {
      $key = $r->get();
      //echo $key;
      foreach($key as $r){
        echo ($r. "<br/>");
      }
    }
  }
  else{
    echo ($key . "\n");
  }

  //echo "echo". $t . "\n";
  //$t += 1;
}



/*
$step = new myRecette('12', 'truc@machin', "title", '15', '15', "resumé");
$info = $step->get();
var_dump($info);

$test = new Read();
$t = $test->getReceiptById($pdo, 74);
var_dump($t);
*/

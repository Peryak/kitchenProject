<?php
require_once "./models/Read.php";
require_once "./handler/connection.php";
$pdo = Database::connect();
$var = new Read();
$tab = $var->receiptAction($pdo, 'recette de test');
//var_dump($tab);
//$arres = $var->tab[1];
$recp = $tab->get();
var_dump($recp);
$t = 0;

echo ($recp['name'] . "<br/>");
echo ($recp['mail'] . "<br/>");
echo ($recp['id'] . "<br/>");
echo ($recp['cookTime'] . "<br/>");
echo ($recp['prepTime'] . "<br/>");
echo ($recp['summary'] . "<br/>");
foreach ($recp['ingredients'] as $key) {
  $tab = $key->get();
  echo ($tab['name'] . "<br/>");
}
foreach ($recp['steps'] as $key) {
  $tab = $key->get();
  echo ($tab['description'] . "<br/>");
}
foreach ($recp['comments'] as $key) {
  $tab = $key->get();
  echo ($tab['name'] . "<br/>");
}


/*
foreach ($recp as $key) {
  if(is_array($key)){
    var_dump($key);
    //$key = $key->get();
    foreach ($key as $r) {
      $key = $r->get();
      //echo $key;
      echo $key['name'];
      /*foreach($key as $r){
        echo ($r['nam. "<br/>");
      }
    }
  }
  else{
    echo ($key . "\n");
  }

  //echo "echo". $t . "\n";
  //$t += 1;
}
*/



/*
$step = new myRecette('12', 'truc@machin', "title", '15', '15', "resumé");
$info = $step->get();
var_dump($info);

$test = new Read();
$t = $test->getReceiptById($pdo, 74);
var_dump($t);
*/

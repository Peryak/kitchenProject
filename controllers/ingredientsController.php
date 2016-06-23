<?php

require_once '../handler/IngredientsHandler.php';

$result1 = IngredientsHandler::readAll();
$result2 = IngredientsHandler::read(1);

?>

<!--
$arrayIngredients = IngredientsHandler::readAll();

foreach ($arrayIngredients as $u) {
    echo "<p>" .$u->getName(). "</p>";

$u = new Ingredients(0, 'blabla', 10, 10);
}*/

/*
// Display one ingredient
$result1 = IngredientsHandler::read(1);
foreach ($result1 as $r1){
    echo '<a>'.$r1->toString().'</a>';
}
*/

// Display all ingredients
/*
$result2 = IngredientsHandler::readAll();
foreach ($result2 as $r2){
    echo '<a>'.$r2->toString().'</a>';
}-->
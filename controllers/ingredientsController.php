<?php
/*
$arrayIngredients = IngredientsHandler::readAll();

foreach ($arrayIngredients as $u) {
    echo "<p>" .$u->getName(). "</p>";

$u = new Ingredients(0, 'blabla', 10, 10);
}*/


require_once '../handler/IngredientsHandler.php';

/*
// Display one ingredient
$result1 = IngredientsHandler::read(1);
foreach ($result1 as $r1){
    echo '<a>'.$r1->toString().'</a>';
}
*/

// Display all ingredients
$result2 = IngredientsHandler::readAll();
?>
<table>
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Quantity</th>
        <th>Value</th>
    </tr>
    <tr>
        <td></td>
        <td></td>
    </tr>
</table>
foreach ($result2 as $r2){
    echo '<a>'.$r2->toString().'</a>';
}
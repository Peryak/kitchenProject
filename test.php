<?php

require_once "./models/Read.php";
require_once "./handler/connection.php";

$pdo = Database::connect();

$var = new Read();
$var->tab = $var->receiptAction($pdo, 'recette de test');

foreach ($var->tab as $item){
  echo var_dump($item);
}

?>
<html>
  <div class="header">
    <?php
      foreach ($var->tab as $item) {
        if (!is_bool($item)){
          echo ("<h1>" . $item->getName() . "</h1>");
        }
      }
    ?>
  </div>
  <div class="body">
    <?php
      foreach ($var->tab as $item) {
        if (!is_bool($item)){
          echo ("<h3> User : " . $item->getMail() . "</h3>");
          foreach ($item->getIngredients() as $subItem) {
            echo ("" . $subItem->getName() . $subItem->getValue() . $subItem->getQuantity() . "</br>");
          }
          foreach ($item->getSteps() as $subItem) {
            echo ("" . $subItem->getDescription() . "</br>");
          }
        }
      }
    ?>
  </div>
  <!--<table>
    <tbody>
      <tr>
        <?php foreach ($var->tab as $item) {
          //echo("<td>" . var_dump($item) . "</td>");
          if (!is_bool($item)) {
            //echo ("<td>" . $item->getName() . "</td>");
            echo ("<td>" . $item->getMail() . "</td>");
            echo ("<tr>");
            foreach ($item->getIngredients() as $subItem) {
              echo ("<td>" . $subItem->getName() . "</td>");
            }
            echo ("</tr>");
            echo ("<tr>");
            foreach ($item->getSteps() as $subItem) {
              echo ("<td>" . $subItem->getDescription() . "</td>");
            }
            echo ("</tr>");
          }
        }
        ?>
      </tr>
    </tbody>

</table> -->

</html>

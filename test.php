<?php

require_once "./models/Read.php";
require_once "./handler/connection.php";

$pdo = Database::connect();

$var = new Read();
$var->tab = $var->receiptAction($pdo, 'recette de test');

?>
<html>
  <table>
    <thead>
      <tr>
        <th>Test</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <?php foreach ($var->tab as $item) {
          echo("<td>" . var_dump($item) . "</td>");
        }
        ?>
      </tr>
    </tbody>
  </table>
</html>
//var_dump($var->tab);

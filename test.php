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
<<<<<<< HEAD

}
</table>
=======
  </table>
</html>
//var_dump($var->tab);
>>>>>>> f60a93c96807017d0e7c9d8cb4aaa2d16f6ea285

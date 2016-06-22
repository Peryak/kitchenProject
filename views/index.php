<?php require_once '../controllers/IngredientsController.php'; ?>
<p>Ce tableau affiche tous les ingrédients triés par nom et valeur</p>
<table border="1">
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Quantity</th>
        <th>Value</th>
    </tr>
    <tr>
        <?php
        foreach ($result1 as $r1){
            echo '<td>'.$r1->getName().'</td>';
        }
        ?>
</tr>
<tr>
    <?php
    foreach ($result1 as $r1){
        echo '<td>'.$r1->getValue().'</td>';
    }
    ?>
</tr>
</table>

<br>

<p>La ligne ci-dessous montre qu'il est possible d'afficher un ingrédient d'après un seul id</p>
<?php foreach ($result2 as $r1){
echo '<td>'.$r1->toString().'</td>';
}
?>

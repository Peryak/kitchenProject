<?php include './views/header.php' ?>

<div class="container">
    <div class="row">
        <h3>Marmiton</h3>
    </div>
    <div class="row">
        <p>
            <a href="create.php" class="btn btn-success">Create</a>
        </p>

        <table class="table table-striped table-bordered">
            <thead>
            <tr>
                <th>Order of the steps</th>
                <th>Receipt number</th>
                <th>Description</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            <!-- we retrieve data from database and show it on the grid -->
            <?php
            //include '../handler/database.php';
            //include '../controllers/etapesController.php';
            //$pdo = Database::connect();
            //$sql = 'SELECT * FROM etapes ORDER BY id DESC';
            //$etape = new etapes();
            //$sql = $etape->getst();
            foreach ($result as $row) {
                echo '<tr>';
                echo '<td>'. $row['etape_order'] . '</td>';
                echo '<td>'. $row['recette_id'] . '</td>';
                echo '<td>'. $row['description'] . '</td>';
                echo '<td width=250>';
                echo '<a class="btn" href="templates/read.php?id='.$row['id'].'">Read</a>';
                echo ' ';
                echo '<a class="btn btn-success" href="templates/update.php?id='.$row['id'].'">Update</a>';
                echo ' ';
                echo '<a class="btn btn-danger" href="templates/delete.php?id='.$row['id'].'">Delete</a>';
                echo '</td>';
                echo '</tr>';
            }
            //Database::disconnect();
            ?>
            </tbody>
        </table>
    </div>
</div> <!-- /container -->

<?php include './views/footer.php' ?>

<!--<?php /* require_once '../controllers/IngredientsController.php';  */ ?>
<p>Ce tableau affiche tous les ingrédients triés par nom et valeur</p>
<table border="1">
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Quantity</th>
        <th>Value</th>
    </tr>
    <tr>
        <?php /*
        foreach ($result1 as $r1){
            echo '<td>'.$r1->getName().'</td>';
        } */
?>
</tr>
<tr>
    <?php /*
    foreach ($result1 as $r1){
        echo '<td>'.$r1->getValue().'</td>';
    } */
?>
</tr>
</table>

<br>

<p>La ligne ci-dessous montre qu'il est possible d'afficher un ingrédient d'après un seul id</p>-->
<?php /* foreach ($result2 as $r1){
echo '<td>'.$r1->toString().'</td>';
} */
?>

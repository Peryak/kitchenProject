<?php

require '../../handler/database.php';

$id = 0;

// It firstly capture the $id from $_GET request
if ( !empty($_GET['id'])) {

    // Once a $_GET request is determined, it shows a confirmation page
    $id = $_REQUEST['id'];
}

// If a $_POST request is detected, it indicates that user has click confirmation button "Yes"
if ( !empty($_POST)) {
    // keep track post values
    $id = $_POST['id'];

    // Then it will proceed to delete the data record and redirects to "index.php" page
    // delete data
    $pdo = Database::connect();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "DELETE FROM etapes  WHERE id = ?";
    $q = $pdo->prepare($sql);
    $q->execute(array($id));
    Database::disconnect();
    header("Location: ../index.php");

}
?>

<?php include '../header.php' ?>

<div class="container">

    <div class="span10 offset1">
        <div class="row">
            <h3>Delete a step</h3>
        </div>

        <!-- It simple store the $_GET['id'] to a hidden field -->
        <form class="form-horizontal" action="delete.php" method="post">
            <input type="hidden" name="id" value="<?php echo $id;?>"/>
            <p class="alert alert-error">Are you sure to delete ?</p>
            <div class="form-actions">
                <button type="submit" class="btn btn-danger">Yes</button>
                <a class="btn" href="../../index.php">No</a>
            </div>
        </form>
    </div>

</div> <!-- /container -->

<?php include '../footer.php' ?>
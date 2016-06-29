<?php
require '../../handler/database.php';
$id = null;

// First it tries to allocate a $_GET['id'] variable
if ( !empty($_GET['id'])) {
    $id = $_REQUEST['id'];
}

/*  If it is not found, it redirects to "index.php" page
    Otherwise, it will read data from database using the "id" field and store data into a PHP variable $data */
if ( null==$id ) {
    header("Location: ../index.php");
} else {
    $pdo = Database::connect();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "SELECT * FROM etapes where id = ?";
    $q = $pdo->prepare($sql);
    $q->execute(array($id));
    $data = $q->fetch(PDO::FETCH_ASSOC);
    Database::disconnect();
}
?>

<?php include '../header.php'?>

    <div class="container">

        <div class="span10 offset1">
            <div class="row">
                <h3>Read the steps in detail</h3>
            </div>

            <div class="form-horizontal" >
                <div class="control-group">
                    <label class="control-label">Order of the steps</label>
                    <div class="controls">
                        <label class="checkbox">
                            <!-- It prints out the $data variable -->
                            <?php echo $data['etape_order'];?>
                        </label>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label">Receipt number</label>
                    <div class="controls">
                        <label class="checkbox">
                            <?php echo $data['recette_id'];?>
                        </label>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label">Description</label>
                    <div class="controls">
                        <label class="checkbox">
                            <?php echo $data['description'];?>
                        </label>
                    </div>
                </div>
                <div class="form-actions">
                    <a class="btn" href="../index.php">Back</a>
                </div>


            </div>
        </div>

    </div> <!-- /container -->

<?php include '../footer.php'?>
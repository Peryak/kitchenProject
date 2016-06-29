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
    $sql = "SELECT * FROM customers where id = ?";
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
                <h3>Read a Customer</h3>
            </div>

            <div class="form-horizontal" >
                <div class="control-group">
                    <label class="control-label">Name</label>
                    <div class="controls">
                        <label class="checkbox">
                            <!-- It prints out the $data variable -->
                            <?php echo $data['name'];?>
                        </label>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label">Email Address</label>
                    <div class="controls">
                        <label class="checkbox">
                            <?php echo $data['email'];?>
                        </label>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label">Mobile Number</label>
                    <div class="controls">
                        <label class="checkbox">
                            <?php echo $data['mobile'];?>
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
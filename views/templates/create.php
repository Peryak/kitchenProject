<?php

require_once '../../handler/database.php';

// Firstly we check if there is form submit by checking $_POST variable
if ( !empty($_POST)) {
    // keep track validation errors
    $etape_orderError = null;
    $recette_idError = null;
    $descriptionError = null;

    // keep track post values
    $etape_order = $_POST['etape_order'];
    $recette_id = $_POST['recette_id'];
    $description = $_POST['description'];

    // If so, we check each entries to ensure they are not empty
    // However if there is any validation error, the validation variables will be showed in the form.
    // validate input
    $valid = true;
    if (empty($etape_order)) {
        $etape_orderError = 'Please enter the order of the step';
        $valid = false;
    }

    // Additionally for email address entry, we use PHP filter to verify if it is a valid email address
    if (empty($recette_id)) {
        $recette_idError = 'Please enter the receipt number';
        $valid = false;
    } /*else if ( !filter_var($email,FILTER_VALIDATE_EMAIL) ) {
        $emailError = 'Please enter a valid Email Address';
        $valid = false;
    }*/

    if (empty($description)) {
        $descriptionError = 'Please enter a description of the receipt';
        $valid = false;
    }


    //If it passes all validation rules, it inserts data to database using Database class
    // insert data
    if ($valid) {
        $pdo = Database::connect();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "INSERT INTO etapes (etape_order,recette_id,description) values(?, ?, ?)";
        $q = $pdo->prepare($sql);
        $q->execute(array($etape_order,$recette_id,$description));
        Database::disconnect();
        header("Location: ../index.php");
    }
}
?>

<?php include '../header.php' ?>
    <div class="container">

                <div class="span10 offset1">
                    <div class="row">
                        <h3>Create a step</h3>
                    </div>

                    <form class="form-horizontal" action="create.php" method="post">
                        <div class="control-group <?php echo !empty($etape_orderError)?'error':'';?>">
                            <label class="control-label">Order of the steps</label>
                            <div class="controls">
                                <input name="etape_order" type="text"  placeholder="Order of the step" value="<?php echo !empty($etape_order)?$etape_order:'';?>">
                                <?php if (!empty($etape_orderError)): ?>
                                    <span class="help-inline"><?php echo $etape_orderError;?></span>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="control-group <?php echo !empty($recette_idError)?'error':'';?>">
                            <label class="control-label">Receipt number</label>
                            <div class="controls">
                                <input name="recette_id" type="text" placeholder="Receipt number" value="<?php echo !empty($recette_id)?$recette_id:'';?>">
                                <?php if (!empty($recette_idError)): ?>
                                    <span class="help-inline"><?php echo $recette_idError;?></span>
                                <?php endif;?>
                            </div>
                        </div>
                        <div class="control-group <?php echo !empty($descriptionError)?'error':'';?>">
                            <label class="control-label">Description</label>
                            <div class="controls">
                                <input name="description" type="text"  placeholder="Description" value="<?php echo !empty($description)?$description:'';?>">
                                <?php if (!empty($descriptionError)): ?>
                                    <span class="help-inline"><?php echo $descriptionError;?></span>
                                <?php endif;?>
                            </div>
                        </div>
                        <div class="form-actions">
                            <button type="submit" class="btn btn-success">Create</button>
                            <a class="btn" href="../index.php">Back</a>
                        </div>
                    </form>
                </div>

    </div> <!-- /container -->

<?php include '../footer.php' ?>
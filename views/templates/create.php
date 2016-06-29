<?php

require_once '../../handler/database.php';

// Firstly we check if there is form submit by checking $_POST variable
if ( !empty($_POST)) {
    // keep track validation errors
    $nameError = null;
    $emailError = null;
    $mobileError = null;

    // keep track post values
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];

    // If so, we check each entries to ensure they are not empty
    // However if there is any validation error, the validation variables will be showed in the form.
    // validate input
    $valid = true;
    if (empty($name)) {
        $nameError = 'Please enter Name';
        $valid = false;
    }

    // Additionally for email address entry, we use PHP filter to verify if it is a valid email address
    if (empty($email)) {
        $emailError = 'Please enter Email Address';
        $valid = false;
    } else if ( !filter_var($email,FILTER_VALIDATE_EMAIL) ) {
        $emailError = 'Please enter a valid Email Address';
        $valid = false;
    }

    if (empty($mobile)) {
        $mobileError = 'Please enter Mobile Number';
        $valid = false;
    }


    //If it passes all validation rules, it inserts data to database using Database class
    // insert data
    if ($valid) {
        $pdo = Database::connect();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "INSERT INTO customers (name,email,mobile) values(?, ?, ?)";
        $q = $pdo->prepare($sql);
        $q->execute(array($name,$email,$mobile));
        Database::disconnect();
        header("Location: ../index.php");
    }
}
?>

<?php include '../header.php' ?>
    <div class="container">

                <div class="span10 offset1">
                    <div class="row">
                        <h3>Create a Customer</h3>
                    </div>

                    <form class="form-horizontal" action="create.php" method="post">
                        <div class="control-group <?php echo !empty($nameError)?'error':'';?>">
                            <label class="control-label">Name</label>
                            <div class="controls">
                                <input name="name" type="text"  placeholder="Name" value="<?php echo !empty($name)?$name:'';?>">
                                <?php if (!empty($nameError)): ?>
                                    <span class="help-inline"><?php echo $nameError;?></span>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="control-group <?php echo !empty($emailError)?'error':'';?>">
                            <label class="control-label">Email Address</label>
                            <div class="controls">
                                <input name="email" type="text" placeholder="Email Address" value="<?php echo !empty($email)?$email:'';?>">
                                <?php if (!empty($emailError)): ?>
                                    <span class="help-inline"><?php echo $emailError;?></span>
                                <?php endif;?>
                            </div>
                        </div>
                        <div class="control-group <?php echo !empty($mobileError)?'error':'';?>">
                            <label class="control-label">Mobile Number</label>
                            <div class="controls">
                                <input name="mobile" type="text"  placeholder="Mobile Number" value="<?php echo !empty($mobile)?$mobile:'';?>">
                                <?php if (!empty($mobileError)): ?>
                                    <span class="help-inline"><?php echo $mobileError;?></span>
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
<?php
require_once "./models/Read.php";
require_once "./handler/connection.php";

$pdo = Database::connect();

$var = new Read();
$_SESSION['tab1'] = $var->getAllReceipt($pdo, TRUE, array(4));
//$tab2 = $var->getAllReceipt($pdo, FALSE, array(4));
?>

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header titlebody-clara_global">Welcome <span class="welcomehomecolor">Home </span>!</h1>
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->

<div class="row">
    <!-- /.col-lg-6 -->
<?php foreach ($_SESSION['tab1'] as $key) { ?>
      <div class="col-lg-6">
        <div class="panel panel-default">
            <div class="panel-heading panelheading-clara_global">
                <?php echo "<span>" . $key->getName() . "</span>"; ?>

            </div>
            <div class="panel-body">

                <!-- Nav tabs -->
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#step_1" data-toggle="tab">Receipt</a>
                    </li>
                    <li><a href="#step_2" data-toggle="tab">Ingredients</a>
                    </li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                    <div class="tab-pane fade in active" id="step_1">
                        <div class="col-md-12">
                            <h5>Make a <em class="titlebodypanel-clara_global"><?php echo $key->getName(); ?></em> !</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="step_2">
                        <h5>Ingredients</h5>
                        <?php echo "<tr>" . $key->getIngredients() . "</tr>"; ?>
                    </div>
                </div>

            </div>
            <div class="panel-footer panelfooter-clara_global">
                <div class="col-md-9">
                    <?php echo "<tr>" . $key->getMail() . "</tr>"; ?>
                </div>
                <div class="col-md-3">
                    <button type="button" class="btn btn-default pull-right">Let's cook!</button>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
      </div>
    <!-- /.col-lg-6 -->
<?php } ?>
</div>

<!-- <p>Hello there <?php echo $first_name . ' ' . $last_name; ?>!<p>

<p>You successfully landed on the home page. Congrats!</p> -->
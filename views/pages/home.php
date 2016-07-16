<?php
require_once "./models/Read.php";
require_once "./handler/connection.php";

$pdo = Database::connect();

$var = new Read();
$recps = $var->getAllReceipt($pdo, TRUE, array(4));
//var_dump($recps);
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
<?php
    $t = 0;
    foreach ($recps as $recp) {
      //var_dump($recp);
      $tab = $recp->get();
      $t += 1;
        ?>
      <div class="col-lg-6">
        <div class="panel panel-default">
            <div class="panel-heading panelheading-clara_global">
                <?php echo "<span>" . $tab['name'] . "</span>"; ?>

            </div>
            <div class="panel-body">

                <!-- Nav tabs -->
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#step_1<?php echo $t ?>" data-toggle="tab">Receipt</a>
                    </li>
                    <li><a href="#step_2<?php echo $t ?>" data-toggle="tab">Ingredients</a>
                    </li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                    <div class="tab-pane fade in active" id="step_1<?php echo $t ?>">
                        <div class="col-md-12">
                            <h5>Make a <em class="titlebodypanel-clara_global"><?php echo $tab['name']; ?></em> !</h5>
                            <p><?php echo $tab['summary']; ?></p>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="step_2<?php echo $t ?>">
                        <h5>Ingredients :</h5>
                        <?php
                        foreach ($tab['ingredients'] as $keyIng) {
                          $tabIng = $keyIng->get();
                          echo ("<b>" . $tabIng['name'] . "</b> : " . $tabIng['value_ing'] . " (" . $tabIng['quantity']. ")" . "<br/>");                        }
                        ?>
                    </div>
                </div>

            </div>
            <div class="panel-footer panelfooter-clara_global">
                <div class="col-md-9">
                    <?php echo "<tr>" . $tab['mail'] . "</tr>"; ?>
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

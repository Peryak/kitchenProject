<?php
require_once "./models/Read.php";
require_once "./handler/connection.php";

$pdo = Database::connect();
$var = new Read();
$_SESSION['tab1'] = $var->getAllReceipt($pdo, TRUE, array(4));
?>

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header titlebody-clara_global">Steps</h1>
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading panelheading-clara_global">
                <span class="titlepanel-clara_global">Follow each step !</span>
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered">
                        <thead>
                        <tr>
                            <th>Receipt</th>
                            <th>Name</th>
                            <th>Author</th>
                            <th></th>
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
                        foreach ($_SESSION['tab1'] as $key) {
                            $recp = $key->get();
                            echo '<tr>';
                            echo '<td>'. $recp['id'] . '</td>';
                            echo '<td>'. $recp['name'] . '</td>';
                            echo '<td>'. $recp['mail'] . '</td>';
                            echo '<td width=250>';
                            echo '<a class="btn btn-default" href="/kitchenProject/views/steps/read.php?id=">Read</a>';
                            echo ' ';
                            echo '<a class="btn btnsend-clara_global" href="/kitchenProject/views/steps/update.php?id=">Update</a>';
                            echo ' ';
                            echo '<a class="btn btndelete-clara_global" href="/kitchenProject/views/steps/delete.php?id=">Delete</a>';
                            echo '</td>';
                            echo '</tr>';
                        }
                        ?>
                        </tbody>
                    </table>
                </div>
                <!-- /.table-responsive -->
            </div>
            <!-- /.panel-body -->
            <div class="panel-footer panelfooter-clara_global">
                <a href="/kitchenProject/views/steps/create.php" class="btn btnsend-clara_global pull-right">Create</a>
                <div class="clearfix"></div>
            </div>
        </div>
        <!-- /.panel -->
    </div>
    <!-- /.col-lg-6 -->
</div>

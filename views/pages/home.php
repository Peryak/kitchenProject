<?php
require_once "./models/Read.php";
require_once "./handler/connection.php";

$pdo = Database::connect();

$var = new Read();
$var->tab = $var->receiptAction($pdo, 'recette de test');
?>

<!-- <p>Hello there <?php echo $first_name . ' ' . $last_name; ?>!<p>

<p>You successfully landed on the home page. Congrats!</p> -->

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header titlebody-clara_global">Welcome <span class="welcomehomecolor">Home </span>!</h1>
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading panelheading-clara_global">
                <span class="titlepanel-clara_global">Looking for an idea? Find your receipt right here!</span>
                <div class="pull-right">
                    <div class="btn-group">
                        <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
                            Actions
                            <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu pull-right" role="menu">
                            <li><a href="#">Action</a>
                            </li>
                            <li><a href="#">Another action</a>
                            </li>
                            <li><a href="#">Something else here</a>
                            </li>
                            <li class="divider"></li>
                            <li><a href="#">Separated link</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <div class="dataTable_wrapper">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                        <tr>
                            <th>Rendering engine</th>
                            <th>Browser</th>
                            <th>Platform(s)</th>
                            <th>Engine version</th>
                            <th>CSS grade</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr class="odd gradeX">
                            <td>Trident</td>
                            <td>Internet Explorer 4.0</td>
                            <td>Win 95+</td>
                            <td class="center">4</td>
                            <td class="center">X</td>
                        </tr>
                        <tr class="even gradeC">
                            <td>Trident</td>
                            <td>Internet Explorer 5.0</td>
                            <td>Win 95+</td>
                            <td class="center">5</td>
                            <td class="center">C</td>
                        </tr>
                        <tr class="odd gradeA">
                            <td>Trident</td>
                            <td>Internet Explorer 5.5</td>
                            <td>Win 95+</td>
                            <td class="center">5.5</td>
                            <td class="center">A</td>
                        </tr>
                        <tr class="even gradeA">
                            <td>Trident</td>
                            <td>Internet Explorer 6</td>
                            <td>Win 98+</td>
                            <td class="center">6</td>
                            <td class="center">A</td>
                        </tr>
                        <tr class="odd gradeA">
                            <td>Trident</td>
                            <td>Internet Explorer 7</td>
                            <td>Win XP SP2+</td>
                            <td class="center">7</td>
                            <td class="center">A</td>
                        </tr>
                        <tr class="even gradeA">
                            <td>Trident</td>
                            <td>AOL browser (AOL desktop)</td>
                            <td>Win XP</td>
                            <td class="center">6</td>
                            <td class="center">A</td>
                        </tr>
                        <tr class="gradeA">
                            <td>Gecko</td>
                            <td>Firefox 1.0</td>
                            <td>Win 98+ / OSX.2+</td>
                            <td class="center">1.7</td>
                            <td class="center">A</td>
                        </tr>
                        <tr class="gradeA">
                            <td>Gecko</td>
                            <td>Firefox 1.5</td>
                            <td>Win 98+ / OSX.2+</td>
                            <td class="center">1.8</td>
                            <td class="center">A</td>
                        </tr>
                        <tr class="gradeA">
                            <td>Gecko</td>
                            <td>Firefox 2.0</td>
                            <td>Win 98+ / OSX.2+</td>
                            <td class="center">1.8</td>
                            <td class="center">A</td>
                        </tr>
                        <tr class="gradeA">
                            <td>Gecko</td>
                            <td>Firefox 3.0</td>
                            <td>Win 2k+ / OSX.3+</td>
                            <td class="center">1.9</td>
                            <td class="center">A</td>
                        </tr>
                        <tr class="gradeA">
                            <td>Gecko</td>
                            <td>Camino 1.0</td>
                            <td>OSX.2+</td>
                            <td class="center">1.8</td>
                            <td class="center">A</td>
                        </tr>
                        <tr class="gradeA">
                            <td>Gecko</td>
                            <td>Camino 1.5</td>
                            <td>OSX.3+</td>
                            <td class="center">1.8</td>
                            <td class="center">A</td>
                        </tr>
                        <tr class="gradeA">
                            <td>Gecko</td>
                            <td>Netscape 7.2</td>
                            <td>Win 95+ / Mac OS 8.6-9.2</td>
                            <td class="center">1.7</td>
                            <td class="center">A</td>
                        </tr>
                        <tr class="gradeA">
                            <td>Gecko</td>
                            <td>Netscape Browser 8</td>
                            <td>Win 98SE+</td>
                            <td class="center">1.7</td>
                            <td class="center">A</td>
                        </tr>
                        <tr class="gradeA">
                            <td>Gecko</td>
                            <td>Netscape Navigator 9</td>
                            <td>Win 98+ / OSX.2+</td>
                            <td class="center">1.8</td>
                            <td class="center">A</td>
                        </tr>
                        <tr class="gradeA">
                            <td>Gecko</td>
                            <td>Mozilla 1.0</td>
                            <td>Win 95+ / OSX.1+</td>
                            <td class="center">1</td>
                            <td class="center">A</td>
                        </tr>
                        <tr class="gradeA">
                            <td>Gecko</td>
                            <td>Mozilla 1.1</td>
                            <td>Win 95+ / OSX.1+</td>
                            <td class="center">1.1</td>
                            <td class="center">A</td>
                        </tr>
                        <tr class="gradeA">
                            <td>Gecko</td>
                            <td>Mozilla 1.2</td>
                            <td>Win 95+ / OSX.1+</td>
                            <td class="center">1.2</td>
                            <td class="center">A</td>
                        </tr>
                        <tr class="gradeA">
                            <td>Gecko</td>
                            <td>Mozilla 1.3</td>
                            <td>Win 95+ / OSX.1+</td>
                            <td class="center">1.3</td>
                            <td class="center">A</td>
                        </tr>
                        <tr class="gradeA">
                            <td>Gecko</td>
                            <td>Mozilla 1.4</td>
                            <td>Win 95+ / OSX.1+</td>
                            <td class="center">1.4</td>
                            <td class="center">A</td>
                        </tr>
                        <tr class="gradeA">
                            <td>Gecko</td>
                            <td>Mozilla 1.5</td>
                            <td>Win 95+ / OSX.1+</td>
                            <td class="center">1.5</td>
                            <td class="center">A</td>
                        </tr>
                        <tr class="gradeA">
                            <td>Gecko</td>
                            <td>Mozilla 1.6</td>
                            <td>Win 95+ / OSX.1+</td>
                            <td class="center">1.6</td>
                            <td class="center">A</td>
                        </tr>
                        <tr class="gradeA">
                            <td>Gecko</td>
                            <td>Mozilla 1.7</td>
                            <td>Win 98+ / OSX.1+</td>
                            <td class="center">1.7</td>
                            <td class="center">A</td>
                        </tr>
                        <tr class="gradeA">
                            <td>Gecko</td>
                            <td>Mozilla 1.8</td>
                            <td>Win 98+ / OSX.1+</td>
                            <td class="center">1.8</td>
                            <td class="center">A</td>
                        </tr>
                        <tr class="gradeA">
                            <td>Gecko</td>
                            <td>Seamonkey 1.1</td>
                            <td>Win 98+ / OSX.2+</td>
                            <td class="center">1.8</td>
                            <td class="center">A</td>
                        </tr>
                        <tr class="gradeA">
                            <td>Gecko</td>
                            <td>Epiphany 2.20</td>
                            <td>Gnome</td>
                            <td class="center">1.8</td>
                            <td class="center">A</td>
                        </tr>
                        <tr class="gradeA">
                            <td>Webkit</td>
                            <td>Safari 1.2</td>
                            <td>OSX.3</td>
                            <td class="center">125.5</td>
                            <td class="center">A</td>
                        </tr>
                        <tr class="gradeA">
                            <td>Webkit</td>
                            <td>Safari 1.3</td>
                            <td>OSX.3</td>
                            <td class="center">312.8</td>
                            <td class="center">A</td>
                        </tr>
                        <tr class="gradeA">
                            <td>Webkit</td>
                            <td>Safari 2.0</td>
                            <td>OSX.4+</td>
                            <td class="center">419.3</td>
                            <td class="center">A</td>
                        </tr>
                        <tr class="gradeA">
                            <td>Webkit</td>
                            <td>Safari 3.0</td>
                            <td>OSX.4+</td>
                            <td class="center">522.1</td>
                            <td class="center">A</td>
                        </tr>
                        <tr class="gradeA">
                            <td>Webkit</td>
                            <td>OmniWeb 5.5</td>
                            <td>OSX.4+</td>
                            <td class="center">420</td>
                            <td class="center">A</td>
                        </tr>
                        <tr class="gradeA">
                            <td>Webkit</td>
                            <td>iPod Touch / iPhone</td>
                            <td>iPod</td>
                            <td class="center">420.1</td>
                            <td class="center">A</td>
                        </tr>
                        <tr class="gradeA">
                            <td>Webkit</td>
                            <td>S60</td>
                            <td>S60</td>
                            <td class="center">413</td>
                            <td class="center">A</td>
                        </tr>
                        <tr class="gradeA">
                            <td>Presto</td>
                            <td>Opera 7.0</td>
                            <td>Win 95+ / OSX.1+</td>
                            <td class="center">-</td>
                            <td class="center">A</td>
                        </tr>
                        <tr class="gradeA">
                            <td>Presto</td>
                            <td>Opera 7.5</td>
                            <td>Win 95+ / OSX.2+</td>
                            <td class="center">-</td>
                            <td class="center">A</td>
                        </tr>
                        <tr class="gradeA">
                            <td>Presto</td>
                            <td>Opera 8.0</td>
                            <td>Win 95+ / OSX.2+</td>
                            <td class="center">-</td>
                            <td class="center">A</td>
                        </tr>
                        <tr class="gradeA">
                            <td>Presto</td>
                            <td>Opera 8.5</td>
                            <td>Win 95+ / OSX.2+</td>
                            <td class="center">-</td>
                            <td class="center">A</td>
                        </tr>
                        <tr class="gradeA">
                            <td>Presto</td>
                            <td>Opera 9.0</td>
                            <td>Win 95+ / OSX.3+</td>
                            <td class="center">-</td>
                            <td class="center">A</td>
                        </tr>
                        <tr class="gradeA">
                            <td>Presto</td>
                            <td>Opera 9.2</td>
                            <td>Win 88+ / OSX.3+</td>
                            <td class="center">-</td>
                            <td class="center">A</td>
                        </tr>
                        <tr class="gradeA">
                            <td>Presto</td>
                            <td>Opera 9.5</td>
                            <td>Win 88+ / OSX.3+</td>
                            <td class="center">-</td>
                            <td class="center">A</td>
                        </tr>
                        <tr class="gradeA">
                            <td>Presto</td>
                            <td>Opera for Wii</td>
                            <td>Wii</td>
                            <td class="center">-</td>
                            <td class="center">A</td>
                        </tr>
                        <tr class="gradeA">
                            <td>Presto</td>
                            <td>Nokia N800</td>
                            <td>N800</td>
                            <td class="center">-</td>
                            <td class="center">A</td>
                        </tr>
                        <tr class="gradeA">
                            <td>Presto</td>
                            <td>Nintendo DS browser</td>
                            <td>Nintendo DS</td>
                            <td class="center">8.5</td>
                            <td class="center">C/A<sup>1</sup>
                            </td>
                        </tr>
                        <tr class="gradeC">
                            <td>KHTML</td>
                            <td>Konqureror 3.1</td>
                            <td>KDE 3.1</td>
                            <td class="center">3.1</td>
                            <td class="center">C</td>
                        </tr>
                        <tr class="gradeA">
                            <td>KHTML</td>
                            <td>Konqureror 3.3</td>
                            <td>KDE 3.3</td>
                            <td class="center">3.3</td>
                            <td class="center">A</td>
                        </tr>
                        <tr class="gradeA">
                            <td>KHTML</td>
                            <td>Konqureror 3.5</td>
                            <td>KDE 3.5</td>
                            <td class="center">3.5</td>
                            <td class="center">A</td>
                        </tr>
                        <tr class="gradeX">
                            <td>Tasman</td>
                            <td>Internet Explorer 4.5</td>
                            <td>Mac OS 8-9</td>
                            <td class="center">-</td>
                            <td class="center">X</td>
                        </tr>
                        <tr class="gradeC">
                            <td>Tasman</td>
                            <td>Internet Explorer 5.1</td>
                            <td>Mac OS 7.6-9</td>
                            <td class="center">1</td>
                            <td class="center">C</td>
                        </tr>
                        <tr class="gradeC">
                            <td>Tasman</td>
                            <td>Internet Explorer 5.2</td>
                            <td>Mac OS 8-X</td>
                            <td class="center">1</td>
                            <td class="center">C</td>
                        </tr>
                        <tr class="gradeA">
                            <td>Misc</td>
                            <td>NetFront 3.1</td>
                            <td>Embedded devices</td>
                            <td class="center">-</td>
                            <td class="center">C</td>
                        </tr>
                        <tr class="gradeA">
                            <td>Misc</td>
                            <td>NetFront 3.4</td>
                            <td>Embedded devices</td>
                            <td class="center">-</td>
                            <td class="center">A</td>
                        </tr>
                        <tr class="gradeX">
                            <td>Misc</td>
                            <td>Dillo 0.8</td>
                            <td>Embedded devices</td>
                            <td class="center">-</td>
                            <td class="center">X</td>
                        </tr>
                        <tr class="gradeX">
                            <td>Misc</td>
                            <td>Links</td>
                            <td>Text only</td>
                            <td class="center">-</td>
                            <td class="center">X</td>
                        </tr>
                        <tr class="gradeX">
                            <td>Misc</td>
                            <td>Lynx</td>
                            <td>Text only</td>
                            <td class="center">-</td>
                            <td class="center">X</td>
                        </tr>
                        <tr class="gradeC">
                            <td>Misc</td>
                            <td>IE Mobile</td>
                            <td>Windows Mobile 6</td>
                            <td class="center">-</td>
                            <td class="center">C</td>
                        </tr>
                        <tr class="gradeC">
                            <td>Misc</td>
                            <td>PSP browser</td>
                            <td>PSP</td>
                            <td class="center">-</td>
                            <td class="center">C</td>
                        </tr>
                        <tr class="gradeU">
                            <td>Other browsers</td>
                            <td>All others</td>
                            <td>-</td>
                            <td class="center">-</td>
                            <td class="center">U</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <!-- /.table-responsive -->
            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>
    <!-- /.col-lg-12 -->

    <div class="row">
        <!-- /.col-lg-6 -->
        <div class="col-lg-6">
            <div class="panel panel-default">
                <div class="panel-heading panelheading-clara_global">

                    <span>
                    <?php
                    foreach ($var->tab as $item) {
                        if (!is_bool($item)){
                            echo ("<h1 class='titlepanelbody-clara_global'>" . $item->getName() . "</h1>");
                        }
                    }
                    ?>
                    </span>

                </div>
                <div class="panel-body">

                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#step_1" data-toggle="tab">Step 1</a>
                        </li>
                        <li><a href="#step_2" data-toggle="tab">Step 2</a>
                        </li>
                        <li><a href="#step_3" data-toggle="tab">Step 3</a>
                        </li>
                        <li><a href="#step_4" data-toggle="tab">Step 4</a>
                        </li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div class="tab-pane fade in active" id="step_1">
                            <h5>Ingredients</h5>
                            <?php
                            foreach ($var->tab as $item) {
                                if (!is_bool($item)) {
                                    foreach ($item->getIngredients() as $subItem) {
                                        echo("<b>" . $subItem->getName() . "</b> - value: " . $subItem->getValue() . ", quantity: " . $subItem->getQuantity() . "</br>");
                                    }
                                }
                            }
                            ?>
                        </div>
                        <div class="tab-pane fade" id="step_2">
                            <h5>Ingredients</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        </div>
                        <div class="tab-pane fade" id="step_3">
                            <h5>Ingredients</h5>
                            <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        </div>
                        <div class="tab-pane fade" id="step_4">
                            <h5>Ingredients</h5>
                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        </div>
                    </div>

                    <?php
                    /*foreach ($var->tab as $item) {
                      if (!is_bool($item)){
                        foreach ($item->getSteps() as $subItem) {
                          echo ("" . $subItem->getDescription() . "</br>");
                        }
                      }
                    }*/
                    ?>

                </div>
                <div class="panel-footer panelfooter-clara_global">

                    <?php
                    foreach ($var->tab as $item) {
                        if (!is_bool($item)){
                            echo("<h5 class='userpanelbody-clara_global'> by " . $item->getMail() . "</h5>");
                        }
                    }
                    ?>

                </div>
            </div>
        </div>
        <!-- /.col-lg-6 -->
        <div class="col-lg-6">
            <div class="panel panel-default">
                <div class="panel-heading panelheading-clara_global">

                    <span>
                    <?php
                    foreach ($var->tab as $item) {
                        if (!is_bool($item)){
                            echo ("<h1 class='titlepanelbody-clara_global'>" . $item->getName() . "</h1>");
                        }
                    }
                    ?>
                    </span>

                </div>
                <div class="panel-body">

                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#step_1" data-toggle="tab">Step 1</a>
                        </li>
                        <li><a href="#step_2" data-toggle="tab">Step 2</a>
                        </li>
                        <li><a href="#step_3" data-toggle="tab">Step 3</a>
                        </li>
                        <li><a href="#step_4" data-toggle="tab">Step 4</a>
                        </li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div class="tab-pane fade in active" id="step_1">
                            <h5>Ingredients</h5>
                            <?php
                            foreach ($var->tab as $item) {
                                if (!is_bool($item)) {
                                    foreach ($item->getIngredients() as $subItem) {
                                        echo("<b>" . $subItem->getName() . "</b> - value: " . $subItem->getValue() . ", quantity: " . $subItem->getQuantity() . "</br>");
                                    }
                                }
                            }
                            ?>
                        </div>
                        <div class="tab-pane fade" id="step_2">
                            <h5>Ingredients</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        </div>
                        <div class="tab-pane fade" id="step_3">
                            <h5>Ingredients</h5>
                            <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        </div>
                        <div class="tab-pane fade" id="step_4">
                            <h5>Ingredients</h5>
                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        </div>
                    </div>

                    <?php
                    /*foreach ($var->tab as $item) {
                      if (!is_bool($item)){
                        foreach ($item->getSteps() as $subItem) {
                          echo ("" . $subItem->getDescription() . "</br>");
                        }
                      }
                    }*/
                    ?>

                </div>
                <div class="panel-footer panelfooter-clara_global">

                    <?php
                    foreach ($var->tab as $item) {
                        if (!is_bool($item)){
                            echo("<h5 class='userpanelbody-clara_global'> by " . $item->getMail() . "</h5>");
                        }
                    }
                    ?>

                </div>
            </div>
        </div>
        <!-- /.col-lg-6 -->
        <div class="col-lg-6">
            <div class="panel panel-default">
                <div class="panel-heading panelheading-clara_global">

                    <span>
                    <?php
                    foreach ($var->tab as $item) {
                        if (!is_bool($item)){
                            echo ("<h1 class='titlepanelbody-clara_global'>" . $item->getName() . "</h1>");
                        }
                    }
                    ?>
                    </span>

                </div>
                <div class="panel-body">

                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#step_1" data-toggle="tab">Step 1</a>
                        </li>
                        <li><a href="#step_2" data-toggle="tab">Step 2</a>
                        </li>
                        <li><a href="#step_3" data-toggle="tab">Step 3</a>
                        </li>
                        <li><a href="#step_4" data-toggle="tab">Step 4</a>
                        </li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div class="tab-pane fade in active" id="step_1">
                            <h5>Ingredients</h5>
                            <?php
                            foreach ($var->tab as $item) {
                                if (!is_bool($item)) {
                                    foreach ($item->getIngredients() as $subItem) {
                                        echo("<b>" . $subItem->getName() . "</b> - value: " . $subItem->getValue() . ", quantity: " . $subItem->getQuantity() . "</br>");
                                    }
                                }
                            }
                            ?>
                        </div>
                        <div class="tab-pane fade" id="step_2">
                            <h5>Ingredients</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        </div>
                        <div class="tab-pane fade" id="step_3">
                            <h5>Ingredients</h5>
                            <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        </div>
                        <div class="tab-pane fade" id="step_4">
                            <h5>Ingredients</h5>
                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        </div>
                    </div>

                    <?php
                    /*foreach ($var->tab as $item) {
                      if (!is_bool($item)){
                        foreach ($item->getSteps() as $subItem) {
                          echo ("" . $subItem->getDescription() . "</br>");
                        }
                      }
                    }*/
                    ?>

                </div>
                <div class="panel-footer panelfooter-clara_global">

                    <?php
                    foreach ($var->tab as $item) {
                        if (!is_bool($item)){
                            echo("<h5 class='userpanelbody-clara_global'> by " . $item->getMail() . "</h5>");
                        }
                    }
                    ?>

                </div>
            </div>
        </div>
        <!-- /.col-lg-6 -->
        <div class="col-lg-6">
            <div class="panel panel-default">
                <div class="panel-heading panelheading-clara_global">

                    <span>
                    <?php
                    foreach ($var->tab as $item) {
                        if (!is_bool($item)){
                            echo ("<h1 class='titlepanelbody-clara_global'>" . $item->getName() . "</h1>");
                        }
                    }
                    ?>
                    </span>

                </div>
                <div class="panel-body">

                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#step_1" data-toggle="tab">Step 1</a>
                        </li>
                        <li><a href="#step_2" data-toggle="tab">Step 2</a>
                        </li>
                        <li><a href="#step_3" data-toggle="tab">Step 3</a>
                        </li>
                        <li><a href="#step_4" data-toggle="tab">Step 4</a>
                        </li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div class="tab-pane fade in active" id="step_1">
                            <h5>Ingredients</h5>
                            <?php
                            foreach ($var->tab as $item) {
                                if (!is_bool($item)) {
                                    foreach ($item->getIngredients() as $subItem) {
                                        echo("<b>" . $subItem->getName() . "</b> - value: " . $subItem->getValue() . ", quantity: " . $subItem->getQuantity() . "</br>");
                                    }
                                }
                            }
                            ?>
                        </div>
                        <div class="tab-pane fade" id="step_2">
                            <h5>Ingredients</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        </div>
                        <div class="tab-pane fade" id="step_3">
                            <h5>Ingredients</h5>
                            <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        </div>
                        <div class="tab-pane fade" id="step_4">
                            <h5>Ingredients</h5>
                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        </div>
                    </div>

                    <?php
                    /*foreach ($var->tab as $item) {
                      if (!is_bool($item)){
                        foreach ($item->getSteps() as $subItem) {
                          echo ("" . $subItem->getDescription() . "</br>");
                        }
                      }
                    }*/
                    ?>

                </div>
                <div class="panel-footer panelfooter-clara_global">

                    <?php
                    foreach ($var->tab as $item) {
                        if (!is_bool($item)){
                            echo("<h5 class='userpanelbody-clara_global'> by " . $item->getMail() . "</h5>");
                        }
                    }
                    ?>

                </div>
            </div>
        </div>
        <!-- /.col-lg-6 -->
    </div>
    <!-- /.row -->

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading panelheading-clara_global">
                    <span class="titlepanel-clara_global">Basic Form Elements</span>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <form role="form">
                                <div class="form-group">
                                    <label>Text Input</label>
                                    <input class="form-control">
                                    <p class="help-block">Example block-level help text here.</p>
                                </div>
                                <div class="form-group">
                                    <label>Text Input with Placeholder</label>
                                    <input class="form-control" placeholder="Enter text">
                                </div>
                                <div class="form-group">
                                    <label>Static Control</label>
                                    <p class="form-control-static">email@example.com</p>
                                </div>
                                <div class="form-group">
                                    <label>File input</label>
                                    <input type="file">
                                </div>
                                <div class="form-group">
                                    <label>Text area</label>
                                    <textarea class="form-control" rows="3"></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Checkboxes</label>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" value="">Checkbox 1
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" value="">Checkbox 2
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" value="">Checkbox 3
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Inline Checkboxes</label>
                                    <label class="checkbox-inline">
                                        <input type="checkbox">1
                                    </label>
                                    <label class="checkbox-inline">
                                        <input type="checkbox">2
                                    </label>
                                    <label class="checkbox-inline">
                                        <input type="checkbox">3
                                    </label>
                                </div>
                                <div class="form-group">
                                    <label>Radio Buttons</label>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>Radio 1
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">Radio 2
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="optionsRadios" id="optionsRadios3" value="option3">Radio 3
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Inline Radio Buttons</label>
                                    <label class="radio-inline">
                                        <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline1" value="option1" checked>1
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline2" value="option2">2
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline3" value="option3">3
                                    </label>
                                </div>
                                <div class="form-group">
                                    <label>Selects</label>
                                    <select class="form-control">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Multiple Selects</label>
                                    <select multiple class="form-control">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-default">Submit Button</button>
                                <button type="reset" class="btn btn-default">Reset Button</button>
                            </form>
                        </div>
                        <!-- /.col-lg-6 (nested) -->
                        <div class="col-lg-6">
                            <h1>Disabled Form States</h1>
                            <form role="form">
                                <fieldset disabled>
                                    <div class="form-group">
                                        <label for="disabledSelect">Disabled input</label>
                                        <input class="form-control" id="disabledInput" type="text" placeholder="Disabled input" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label for="disabledSelect">Disabled select menu</label>
                                        <select id="disabledSelect" class="form-control">
                                            <option>Disabled select</option>
                                        </select>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox">Disabled Checkbox
                                        </label>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Disabled Button</button>
                                </fieldset>
                            </form>
                            <h1>Form Validation States</h1>
                            <form role="form">
                                <div class="form-group has-success">
                                    <label class="control-label" for="inputSuccess">Input with success</label>
                                    <input type="text" class="form-control" id="inputSuccess">
                                </div>
                                <div class="form-group has-warning">
                                    <label class="control-label" for="inputWarning">Input with warning</label>
                                    <input type="text" class="form-control" id="inputWarning">
                                </div>
                                <div class="form-group has-error">
                                    <label class="control-label" for="inputError">Input with error</label>
                                    <input type="text" class="form-control" id="inputError">
                                </div>
                            </form>
                            <h1>Input Groups</h1>
                            <form role="form">
                                <div class="form-group input-group">
                                    <span class="input-group-addon">@</span>
                                    <input type="text" class="form-control" placeholder="Username">
                                </div>
                                <div class="form-group input-group">
                                    <input type="text" class="form-control">
                                    <span class="input-group-addon">.00</span>
                                </div>
                                <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-eur"></i>
                                            </span>
                                    <input type="text" class="form-control" placeholder="Font Awesome Icon">
                                </div>
                                <div class="form-group input-group">
                                    <span class="input-group-addon">$</span>
                                    <input type="text" class="form-control">
                                    <span class="input-group-addon">.00</span>
                                </div>
                                <div class="form-group input-group">
                                    <input type="text" class="form-control">
                                            <span class="input-group-btn">
                                                <button class="btn btn-default" type="button"><i class="fa fa-search"></i>
                                                </button>
                                            </span>
                                </div>
                            </form>
                        </div>
                        <!-- /.col-lg-6 (nested) -->
                    </div>
                    <!-- /.row (nested) -->
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
<?php

require_once "./models/Read.php";
require_once "./handler/connection.php";

$pdo = Database::connect();

$var = new Read();
$var->tab = $var->receiptAction($pdo, 'recette de test');

?>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Cooking Free Receipts">
  <meta name="author" content="Pierre Laitselart">

  <title>kitchenProject</title>

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" type="text/css" href="views/assets/bower_components/bootstrap/dist/css/bootstrap.min.css">

  <!-- Custom Fonts -->
  <link rel="stylesheet" type="text/css" href="views/assets/bower_components/font-awesome/css/font-awesome.min.css">

  <!-- MetisMenu CSS -->
  <link rel="stylesheet" type="text/css" href="views/assets/bower_components/metisMenu/dist/metisMenu.min.css">

  <!-- Global CSS -->
  <link rel="stylesheet" type="text/css" href="views/assets/css/special.css">
  <link rel="stylesheet" type="text/css" href="views/assets/css/global.css">

</head>

<div class="container">
  <div class="row">
    <!-- /.col-lg-6 -->
    <div class="col-lg-6">
      <div class="panel panel-default">
        <div class="panel-heading panelheading-clara_global">

            <span class="titlepanel-clara_global">Default Panel</span>

        </div>
        <div class="panel-body">

            <?php
            foreach ($var->tab as $item) {
              if (!is_bool($item)){
                echo ("<h1 class='titlepanelbody-clara_global'>" . $item->getName() . "</h1>");
                echo("<h5 class='userpanelbody-clara_global'> by " . $item->getMail() . "</h5>");
              }
            }
            ?>

          <!-- Nav tabs -->
          <ul class="nav nav-tabs">
            <li class="active"><a href="#home" data-toggle="tab">Home</a>
            </li>
            <li><a href="#profile" data-toggle="tab">Profile</a>
            </li>
            <li><a href="#messages" data-toggle="tab">Messages</a>
            </li>
            <li><a href="#settings" data-toggle="tab">Settings</a>
            </li>
          </ul>

          <!-- Tab panes -->
          <div class="tab-content">
            <div class="tab-pane fade in active" id="home">
              <h4>Home Tab</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
            <div class="tab-pane fade" id="profile">
              <h4>Profile Tab</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
            <div class="tab-pane fade" id="messages">
              <h4>Messages Tab</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
            <div class="tab-pane fade" id="settings">
              <h4>Settings Tab</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
          </div>

            <?php
            foreach ($var->tab as $item) {
              if (!is_bool($item)){
                foreach ($item->getIngredients() as $subItem) {
                  echo ("" . $subItem->getName() . $subItem->getValue() . $subItem->getQuantity() . "</br>");
                }
                foreach ($item->getSteps() as $subItem) {
                  echo ("" . $subItem->getDescription() . "</br>");
                }
              }
            }
            ?>

        </div>
        <div class="panel-footer panelfooter-clara_global">

            Panel Footer

        </div>
      </div>
    </div>
    <!-- /.col-lg-6 -->
  </div>
  <!-- /.row -->
</div>

<!-- jQuery -->
<script src="views/assets/bower_components/jquery/dist/jquery.min.js"></script>

<!-- JavaScript for the swipeable sidebar -->
<script src="views/assets/js/sidebar.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="views/assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="views/assets/bower_components/metisMenu/dist/metisMenu.min.js"></script>

<!-- Custom Theme JavaScript -->
<script src="views/assets/js/global.js"></script>
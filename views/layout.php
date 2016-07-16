<?php
require_once "./models/Read.php";
require_once "./handler/connection.php";

$pdo = Database::connect();
?>

<DOCTYPE html>
<html lang="en">

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

    <!-- DataTables JavaScript -->
    <script src="views/assets/bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
    <script src="views/assets/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
        $(document).ready(function() {
            $('#dataTables-example').DataTable({
                responsive: true
            });
        });
    </script>

</head>

<body>

    <div id="wrapper">

        <nav class="navbar header-clara_global navbar-static-top"
             role="navigation" style="margin-bottom: 0">
            <div class="nav collapse navbar-header navbar-collapse">
                <a class="navbar-brand titleheader-clara_global" href="/kitchenProject/">kitchenProject</a>
                <a class="navbar-brand navbarTitle" href='?controller=receipts&action=receipt'>Receipts</a>
                <a class="navbar-brand navbarTitle" href='#'>Trends</a>
                <a class="navbar-brand navbarTitle" href='#'>Burgers</a>
                <a class="navbar-brand navbarTitle" href='?controller=posts&action=post'>Posts</a>
                <a class="navbar-brand navbarTitle" href='?controller=steps&action=getst'>Steps</a>
            </div>
            <!-- /.navbar-header -->
            <ul class="nav navbar-top-links navbar-right">
                <li><i class="fa fa-facebook fa-lg icon-clara_global"> </i></li>
                <li><i class="fa fa-twitter fa-lg icon-clara_global"> </i></li>
                <li><i class="fa fa-google-plus fa-lg icon-clara_global"> </i></li>
                <li><i class="fa fa-instagram fa-lg icon-clara_global"> </i></li>
                <li>
                    <!--<form class="navbar-form" role="search" method="post">
                        <div class="input-group testSearch">
                            <input
                              type="text"
                              class="form-control"
                              placeholder="Rechercher"
                              name="toolbar_search"
                              id="placeholder-clara_global">
                            <div class="input-group-btn">
                              <imput
                                class="btn btnsearch-clara_global"
                                type="submit">
                                  <i class="fa fa-search"></i>
                              </imput>
                            </div>
                        </div>
                    </form>-->
                    <form class="navbar-form" role="search" method="post">
                      <div class="input-group testSearch">
                        <input
                          type="text"
                          name="toolbar_search"
                          class="form-control"
                          placeholder="Search"
                          id="placeholder-clara_global">
                        <div class="input-group-btn">
                          <input
                            type="submit"
                            value=""
                            class="btn btnsearch-clara_global">
                          </input>
                        </div>
                      </div>
                        <i class="fa fa-search positionSearch"></i>
                    </form>
                </li>
            </ul>
            <!-- /.navbar-top-links -->

            <div class="sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="/kitchenProject/" class="sidebartitle-clara_global">
                                <i class="fa fa-home fa-lg homeicon"></i>
                                <span class="menu-text">Home</span>
                            </a>
                        </li>
                        <li>
                            <a href="?controller=receipts&action=receipt" class="sidebartitle-clara_global">
                                <i class="fa fa-spoon fa-lg spoonicon"></i>
                                <span class="menu-text">Receipts</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="sidebartitle-clara_global">
                                <i class="fa fa-users fa-lg usersicon"></i>
                                <span class="menu-text">Trends</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="sidebartitle-clara_global">
                                <i class="fa fa-circle-thin fa-lg circleicon"></i>
                                <span class="menu-text">Burgers</span>
                            </a>
                        </li>
                        <li>
                            <a href="?controller=posts&action=post" class="sidebartitle-clara_global">
                                <i class="fa fa-newspaper-o fa-lg newspapericon"></i>
                                <span class="menu-text">Posts</span>
                            </a>
                        </li>
                        <li>
                            <a href="?controller=steps&action=getst" class="sidebartitle-clara_global">
                                <i class="fa fa-dashboard fa-lg dashboardicon"></i>
                                <span class="menu-text">Steps</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div id="main-container">
                    <div class="menu-icon">
                        <div class="swipeablebtn-clara_global">
                            <i class="fa fa-chevron-left fa-lg iconswipeablebtn-clara_global"></i>
                            <span class="titleswipeablebtn-clara_global">Reduce the sidebar menu</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.sidebar-collapse -->
        <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">

            <!-- In the middle we require another file: routes.php
                The only part we still need is the main area of our page
                We can determine what view we need to put there
                depending on our previously set $controller and $action variables
                The routes.php file is gonna take care of that -->

            <?php require_once('routes.php'); ?>

        </div>

    </div>

</body>

<html>

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

</head>

<body>

    <div id="wrapper">

        <nav class="navbar header-clara_global navbar-static-top"
             role="navigation" style="margin-bottom: 0">
            <div class="nav collapse navbar-header navbar-collapse">
                <a class="navbar-brand titleheader-clara_global" href="/kitchenProject/">kitchenProject</a>
                <a class="navbar-brand" href='?controller=posts&action=index'>Posts</a>
                <a class="navbar-brand" href='?controller=steps&action=getst'>Steps</a>
            </div>
            <!-- /.navbar-header -->
            <ul class="nav navbar-top-links navbar-right">
                <li>
                    <form class="navbar-form" role="search">
                        <div class="input-group testSearch">
                            <input type="text" class="form-control"
                                   placeholder="Rechercher" name="placeholder-clara_global"
                                   id="placeholder-clara_global">
                            <div class="input-group-btn">
                                <button class="btn btnsearch-clara_global" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </li>

                <li class="dropdown">
                    <a class="dropdown-toggle"data-toggle="dropdown" href="#">
                        <i class="fa fa-bell fa-fw icon-clara_global"></i>
                        <i class="fa fa-caret-down icon-clara_global"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                        <li><a href="#">
                                <div>
                                    <i class="fa fa-comment fa-fw"></i> New Comment <span
                                        class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a></li>
                        <li class="divider"></li>
                        <li><a href="#">
                                <div>
                                    <i class="fa fa-twitter fa-fw"></i> 3 New Followers <span
                                        class="pull-right text-muted small">12 minutes ago</span>
                                </div>
                            </a></li>
                        <li class="divider"></li>
                        <li><a href="#">
                                <div>
                                    <i class="fa fa-envelope fa-fw"></i> Message Sent <span
                                        class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a></li>
                        <li class="divider"></li>
                        <li><a href="#">
                                <div>
                                    <i class="fa fa-tasks fa-fw"></i> New Task <span
                                        class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a></li>
                        <li class="divider"></li>
                        <li><a href="#">
                                <div>
                                    <i class="fa fa-upload fa-fw"></i> Server Rebooted <span
                                        class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a></li>
                        <li class="divider"></li>
                        <li><a class="text-center" href="#"> <strong>See
                                    All Alerts</strong> <i class="fa fa-angle-right"></i>
                            </a></li>
                    </ul> <!-- /.dropdown-alerts --></li>
                <!-- /.dropdown -->
                <li class="dropdown"><a class="dropdown-toggle"
                                        data-toggle="dropdown" href="#"> <i
                            class="fa fa-user fa-fw icon-clara_global"></i> <i
                            class="fa fa-caret-down icon-clara_global"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User
                                Profile</a></li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i>
                                Settings</a></li>
                        <li class="divider"></li>
                        <li><a href="login.html"><i
                                    class="fa fa-sign-out fa-fw"></i> Logout</a></li>
                    </ul> <!-- /.dropdown-user --></li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li><a href="index.html" class="sidebartitle-clara_global"><i
                                    class="fa fa-dashboard fa-fw"></i> <span class="menu-text">Dashboard</span></a>
                        </li>
                        <li><a href="#" class="sidebartitle-clara_global"><i
                                    class="fa fa-bar-chart-o fa-fw"></i> <span class="menu-text">Charts<span
                                        class="fa arrow"></span></span></a>
                            <ul class="nav nav-second-level">
                                <li><a href="flot.html">Flot Charts</a></li>
                                <li><a href="morris.html">Morris.js Charts</a></li>
                            </ul> <!-- /.nav-second-level --></li>
                        <li><a href="tables.html" class="sidebartitle-clara_global"><i
                                    class="fa fa-table fa-fw"></i> <span class="menu-text">Tables</span></a>
                        </li>
                        <li><a href="forms.html" class="sidebartitle-clara_global"><i
                                    class="fa fa-edit fa-fw"></i> <span class="menu-text">Forms</span></a>
                        </li>
                        <li><a href="#" class="sidebartitle-clara_global"><i
                                    class="fa fa-wrench fa-fw"></i> <span class="menu-text">UI
                                            Elements<span class="fa arrow"></span>
                                    </span></a>
                            <ul class="nav nav-second-level">
                                <li><a href="buttons.html">Buttons</a></li>
                                <li><a href="icons.html">Icons</a></li>
                                <li><a href="modals.html">Modals</a></li>
                                <li><a href="notifications.html">Notifications</a></li>
                                <li><a href="panels-wells.html">Panels and Wells</a></li>
                                <li><a href="timeline.html">Timeline</a></li>
                            </ul> <!-- /.nav-second-level --></li>
                        <li><a href="#" class="sidebartitle-clara_global"><i
                                    class="fa fa-sitemap fa-fw"></i> <span class="menu-text">Multi-Level
                                            Dropdown<span class="fa arrow"></span>
                                    </span></a>
                            <ul class="nav nav-second-level">
                                <li><a href="#">Second Level Item</a></li>
                                <li><a href="#">Second Level Item</a></li>
                                <li><a href="#">Third Level <span class="fa arrow"></span></a>
                                    <ul class="nav nav-third-level">
                                        <li><a href="#">Third Level Item</a></li>
                                        <li><a href="#">Third Level Item</a></li>
                                        <li><a href="#">Third Level Item</a></li>
                                        <li><a href="#">Third Level Item</a></li>
                                    </ul> <!-- /.nav-third-level --></li>
                            </ul> <!-- /.nav-second-level --></li>
                        <li><a href="#" class="sidebartitle-clara_global"><i
                                    class="fa fa-files-o fa-fw"></i> <span class="menu-text">Sample
                                            Pages<span class="fa arrow"></span>
                                    </span></a>
                            <ul class="nav nav-second-level">
                                <li><a href="blank.html">Blank Page</a></li>
                                <li><a href="login.html">Login Page</a></li>
                            </ul> <!-- /.nav-second-level -->
                        </li>
                    </ul>
                </div>
                <div id="main-container">
                    <div class="menu-icon">
                        <div class="swipeablebtn-clara_global">
                            <i class="fa fa-chevron-left fa-lg iconswipeablebtn-clara_global"></i>
                            <span class="titleswipeablebtn-clara_global">Réduire le menu latéral</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.sidebar-collapse -->
        <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header titlebody-clara_global">Accueil</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->

            <!-- In the middle we require another file: routes.php
                The only part we still need is the main area of our page
                We can determine what view we need to put there
                depending on our previously set $controller and $action variables
                The routes.php file is gonna take care of that -->

            <?php require_once('routes.php'); ?>

        </div>

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

</body>

<html>
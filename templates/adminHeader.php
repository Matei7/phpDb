<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet"
          type="text/css">
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
    <link href="css/simple-line-icons.min.css" rel="stylesheet" type="text/css"/>
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="css/uniform.default.css" rel="stylesheet" type="text/css"/>
    <link href="css/bootstrap-switch.min.css" rel="stylesheet" type="text/css"/>
    <link href="css/jqvmap.css" rel="stylesheet" type="text/css">
    <link href="css/tasks.css" rel="stylesheet" type="text/css">

    <link href="css/components.css" rel="stylesheet" type="text/css">
    <link href="css/plugins.css" rel="stylesheet" type="text/css">
    <link href="css/layout.css" rel="stylesheet" type="text/css">
    <link href="css/grey.css" rel="stylesheet" type="text/css">
    <link href="css/custom.css" rel="stylesheet" type="text/css">

</head>
<body class="page-boxed page-header-fixed page-sidebar-closed-hide-logo page-container-bg-solid page-sidebar-closed-hide-logo">


<!-- BEGIN HEADER -->
<div class="page-header navbar navbar-fixed-top">
    <!-- BEGIN HEADER INNER -->
    <div class="page-header-inner container">
        <!-- BEGIN LOGO -->
        <div class="page-logo">
            <a href="index.php?action=HomeController_displayAdminHomepage">
                <img src="img/logo-default.png" alt="logo" class="logo-default"/>
            </a>
            <div class="menu-toggler sidebar-toggler">

            </div>
        </div>

        <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse"
           data-target=".navbar-collapse">
        </a>

        <div class="page-top">

            <form class="search-form search-form-expanded" action="extra_search.html" method="GET">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search..." name="query">
                    <span class="input-group-btn">
					<a href="javascript:;" class="btn submit"><i class="icon-magnifier"></i></a>
					</span>
                </div>
            </form>
            <!-- END HEADER SEARCH BOX -->
            <!-- BEGIN TOP NAVIGATION MENU -->
            <div class="top-menu">
                <ul class="nav navbar-nav pull-right">

                    <li class="dropdown dropdown-user">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"
                           data-close-others="true">
                            <img alt="" class="img-circle" src="img/avatar3_small.jpg"/>
                            <span class="username username-hide-on-mobile">
                                <?php
                                echo $_SESSION['name'];
                                ?>
						</span>
                            <i class="fa fa-angle-down"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-default">
                            <li>
                                <a href="#">
                                    <i class="icon-user"></i> My Profile </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="icon-calendar"></i> My Articles </a>
                            </li>
                            <li>
                                <a href="admin-logout">
                                    <i class="icon-logout"></i> LogOut </a>
                            </li>

                        </ul>
                    </li>
                    <!-- END USER LOGIN DROPDOWN -->
                </ul>
            </div>
            <!-- END TOP NAVIGATION MENU -->
        </div>
        <!-- END PAGE TOP -->
    </div>
    <!-- END HEADER INNER -->
</div>

<div class="clearfix">
</div>
<div class="container">
    <div class="page-container">
        <!-- BEGIN SIDEBAR -->
        <div class="page-sidebar-wrapper">

            <div class="page-sidebar-wrapper">
                <div class="page-sidebar navbar-collapse collapse">
                    <ul class="page-sidebar-menu page-sidebar-menu-hover-submenu " data-keep-expanded="false"
                        data-auto-scroll="true" data-slide-speed="200">
                        <li>
                            <a href="homepage">
                                <i class="icon-home"></i>
                                <span class="title">Dashboard</span>
                                <span class="selected"></span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:;">
                                <i class="icon-basket"></i>
                                <span class="title">Articles</span>
                                <span class="arrow "></span>
                            </a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="index.php?action=ArticleController_manageArticles">
                                        Manage Articles</a>
                                </li>

                                <li>
                                    <a href="index.php?action=ArticleController_addArticle">
                                        <span class="badge badge-roundless badge-danger">new</span>Add Article</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:;">
                                <i class="icon-rocket"></i>
                                <span class="title">Categories</span>
                                <span class="arrow "></span>
                            </a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="index.php?action=CategoryController_manageCategories">
                                        Manage Categories</a>
                                </li>

                                <li>
                                    <a href="ui_icons.html">
                                        <span class="badge badge-roundless badge-danger">new</span>Add Category</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:;">
                                <i class="icon-diamond"></i>
                                <span class="title">Users</span>
                                <span class="arrow "></span>
                            </a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="#">
                                        Manage Users</a>
                                </li>

                                <li>
                                    <a href="#">
                                        <span class="badge badge-roundless badge-danger">new</span>Add User</a>
                                </li>

                            </ul>
                        </li>

                    </ul>
                    <!-- END SIDEBAR MENU -->
                </div>
            </div>
        </div>
        <div class="page-content-wrapper">
            <div class="page-content">
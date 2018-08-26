<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Homepage</title>
    <link href="css/jquery.fancybox.css" rel="stylesheet" type="text/css"/>
    <link href="css/portfolio.css" rel="stylesheet" type="text/css"/>
</head>
<body>


<?php
include "adminHeader.php";
?>

<h3 class="page-title">
    Homepage
</h3>
<div class="page-bar">
    <ul class="page-breadcrumb">
        <li>
            <i class="fa fa-home"></i>
            <a href="index.php?action=HomeController_displayAdminHomepage">Home</a>
            <i class="fa fa-angle-right"></i>
        </li>

    </ul>
    <div class="page-toolbar">
        <div class="btn-group pull-right">
            <button type="button" class="btn btn-fit-height grey-salt dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="1000" data-close-others="true" aria-expanded="false">
                Actions <i class="fa fa-angle-down"></i>
            </button>
            <ul class="dropdown-menu pull-right" role="menu">
                <li>
                    <a href="#">Action</a>
                </li>
                <li>
                    <a href="#">Another action</a>
                </li>
                <li>
                    <a href="#">Something else here</a>
                </li>
                <li class="divider">
                </li>
                <li>
                    <a href="#">Separated link</a>
                </li>
            </ul>
        </div>
    </div>
</div>


<?php
echo '<div class="row mix-grid thumbnails" style="   ">';

foreach ($this->categorii as $cat) {
    echo '<div class="col-md-4 col-sm-6 mix category_1 mix_all" style=" display: block; opacity: 1;">';
    echo '<div class="mix-inner">';
    echo '<img class="img-responsive" src="img/img1.jpg" alt="">';
    echo '<div class="mix-details">';
    echo '<h3>' . ucfirst($cat["nume"]) . '</h3>';
    echo $cat["descriere"];
    echo '<a class="mix-link" href="index.php?action=CategoryController_displayCategories&id=' . $cat["id"] . '" >
                    <i class="fa fa-link"></i>
                </a>
                <a class="mix-preview fancybox-button" href="#"
                   title="Project Name" data-rel="fancybox-button">
                    <i class="fa fa-search"></i>
                </a>';

    echo '</div>';
    echo '</div>';
    echo '</div>';
}


echo '</div>';
include "adminFooter.php";
?>


<script src="js/portfolio.js"></script>
<script>
    jQuery(document).ready(function () {
        Metronic.init(); // init metronic core components
        Layout.init(); // init current layout
        Demo.init(); // init demo features
        Portfolio.init();
    });</script>
</body>
</html>
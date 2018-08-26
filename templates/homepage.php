<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Homepage</title>
    <link href="css/jquery.fancybox.css" rel="stylesheet" type="text/css"/>
    <link href="css/portfolio.css" rel="stylesheet" type="text/css"/>
</head>
<body>

<div class="row">
    <?php
    include "header.php";


    foreach ($this->categorii as $cat) {
        echo "<div class=\"col-md-4 \">
        <div class=\"portlet box red\">
            <div class=\"portlet-title\">
                <div class=\"caption\">
                    <i class=\"fa fa-bookmark\"></i>";
        echo '<a class="cat-link" href="index.php?action=CategoryController_displayCategories&id=' . $cat["id"] . '" >' . ucfirst($cat["nume"]) . '</a>';
        echo "    </div>
                <div class=\"tools\">
                    <a href=\"javascript:;\" class=\"collapse\">
                    </a>

                </div>
            </div>
            <div class=\"portlet-body\">
                <div class=\"scroller\" style=\"height:200px; \" data-always-visible=\"1\" data-rail-visible=\"1\"
                     data-rail-color=\"blue\" data-handle-color=\"red\">";
        echo $cat["descriere"];
        echo '</div>
            </div>
        </div>
    </div>';
    }

    ?>
</div>

</body>
</html>
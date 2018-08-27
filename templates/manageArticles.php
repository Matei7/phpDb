<!DOCTYPE html>
<html lang="en">
<head>
    <base href="http://localhost/phpDb/">
    <meta charset="UTF-8">
    <title>Homepage</title>
    <link rel="stylesheet" type="text/css" href="css/dataTables.bootstrap.css"/>
    <link href="css/components-rounded.css" id="style_components" rel="stylesheet" type="text/css">
    <link href="css/plugins.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="css/select2.css"/>
    <link rel="stylesheet" type="text/css" href="css/dataTables.scroller.min.css"/>
    <link rel="stylesheet" type="text/css" href="css/dataTables.colReorder.min.css"/>
    <link rel="stylesheet" type="text/css" href="css/dataTables.bootstrap-rtl.css"/>
    <link rel="stylesheet" type="text/css" href="css/style.css"/>

</head>
<body>

<?php
include_once "adminHeader.php";
?>
<h3 class="page-title">
    Manage articles
</h3>
<div class="page-bar">
    <ul class="page-breadcrumb">
        <li>
            <i class="fa fa-home"></i>
            <a href="index.php?action=HomeController_displayAdminHomepage">Home</a>
            <i class="fa fa-angle-right"></i>
        </li>
        <li>
            <a href="index.php?action=ArticleController_manageArticles">Articles</a>
            <i class="fa fa-angle-right"></i>
        </li>
        <li>
            <a href="#">Manage articles</a>
        </li>
    </ul>
    <div class="page-toolbar">
        <div class="btn-group pull-right">
            <button type="button" class="btn btn-fit-height grey-salt dropdown-toggle" data-toggle="dropdown"
                    data-hover="dropdown" data-delay="1000" data-close-others="true" aria-expanded="false">
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

$artServ = new ArticleService();

$i = 1;
$url = "index.php?action=ArticleController_manageArticles&currentpage=" . $this->currentpage;
echo '<form class="login-form" action="' . $url . '" method="POST">';
echo '<table>';
echo '<thead> <tr> <th>#</th><th>Title</th><th>Continut</th><th colspan="4">Actions</th></tr></thead>';
echo '<tbody>';


foreach ($this->articles as $row) {
    echo "<tr>";
    echo "<td>";
    echo $i;
    echo '<input type="hidden" value="' . $row["id"] . '" name="id' . $i . '"/>';
    echo "</td>";
    echo "<td>";
    echo $row["titlu"];
    echo "</td>";
    echo "<td>";
    echo $row["continut"];
    echo "</td>";
    echo "<td>";
    echo '<button><a href="index.php?action=ArticleController_editArticle&id=' . $row["id"] . '">Edit</a></button>';
    echo "</td>";
    echo "<td>";

    echo '<button onclick="confirmDelete(' . $row["id"] . ')">Delete</button>';

    echo "</td>";
    echo "<td>";
    if ($row['visible'] != "0") {
        echo '<input style="display: inline;white-space:nowrap;margin: 2px auto;" type="radio"  checked="true" disabled  />';
    } else {
        echo '<input style="display: inline;white-space:nowrap;margin: 2px auto;" type="radio"  disabled  />';
    }
    echo "</td>";
    echo "<td>";
    if ($row['visible'] != "0") {
        echo '<a href="index.php?action=ArticleController_displayArticle&id=' . $row["id"] . '">Show Article</a>';
    } else {
        echo '<a href="index.php?action=ArticleController_displayArticle&id=' . $row["id"] . ' "onclick="return false">Show Article</a>';
    }
    echo "</td>";;
    echo "</tr>";
    $i++;
}
echo ' </tbody > ';
echo '</table > ';
echo '</form>';

$range = 3;
if ($this->currentpage > 1) {
    $prevpage = $this->currentpage - 1;
}
if ($this->currentpage != $this->totalpages) {
    $nextpage = $this->currentpage + 1;
}

echo '<div class="row">';

$currVal = ($this->currentpage - 1) * 25 + 1;
$currVal2 = $currVal + 25;
if ($currVal2 >= $this->numrows) {
    $currVal2 = $this->numrows;
}
echo '<div class="col-md-4"></div>';

echo '<div class="col-md-4 col-sm-12" id="table-info"><div class="dataTables_info" id="sample_2_info" role="status" aria-live="polite">Showing ' . $currVal . ' to ' . $currVal2 . ' of ' . $this->numrows . ' entries</div>';

echo '</div>';
echo '<div class="col-md-4"></div>';
echo '</div>';
echo '<div class="row">';
echo '<div class="col-md-4"></div>';
echo "<div class=\"col-md-4 col-sm-12\">
    <div class=\"dataTables_paginate paging_simple_numbers\" id=\"sample_2_paginate\">
        <ul class=\"pagination\">
           <li class=\"paginate_button previous \" aria-controls=\"sample_1\" tabindex=\"0\" id=\"sample_1_previous\">" . '<a href="index.php?action=ArticleController_manageArticles&currentpage=' . $prevpage . '">' .
    " <i class=\"fa fa-angle-left\"></i></a></li>";
for ($x = ($this->currentpage - $range); $x < (($this->currentpage + $range) + 1); $x++) {
    if (($x > 0) && ($x <= $this->totalpages)) {
        if ($x == $this->currentpage) {
            echo '<li class="paginate_button active" aria-controls="sample_1" tabindex="' . $x . '">';
            echo "<a href='#'>" . $x . "</a>";
            echo '</li>';
        } else {
            echo '<li class="paginate_button" aria-controls="sample_1" tabindex="' . $x . '">';
            echo " <a href='index.php?action=ArticleController_manageArticles&currentpage=$x'>$x</a> ";
            echo '</li>';
        }
    }
}

echo "<li class=\"paginate_button next\" aria-controls=\"sample_1\" tabindex=\"0\" id=\"sample_1_next\">";
echo " <a href='index.php?action=ArticleController_manageArticles&currentpage=$nextpage'>";
echo "<i class=\"fa fa-angle-right\"></i></a></li>";
echo "</ul></div></div><div class=\"col-md-4\"></div>";
echo '</div>';
include_once "adminFooter.php";
?>

</body>
</html>

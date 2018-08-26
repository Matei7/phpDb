<!DOCTYPE html>
<html lang="en">
<head>
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
include_once "header.php";
$artServ = new ArticleService();


echo '<div class="col-sm-6">';
echo '<div class="row">';

$numrows = $artServ->getArticlesNumberOfRows($this->id);

$rowsperpage = 10;
$totalpages = ceil($numrows / $rowsperpage);

if (isset($_GET['currentpage']) && is_numeric($_GET['currentpage'])) {
    $currentpage = (int)$_GET['currentpage'];
} else {
    $currentpage = 1;
}
if ($currentpage > $totalpages) {
    $currentpage = $totalpages;
}
if ($currentpage < 1) {
    $currentpage = 1;
}
$offset = ($currentpage - 1) * $rowsperpage;


$result = $artServ->getArticlesPerPage($this->id, $offset, $rowsperpage);

echo '<table>';
echo '<thead> <tr> <th>Title</th><th colspan="2">Continut</th></tr></thead>';
echo '<tbody>';


foreach ($result as $row) {
    echo '<tr><td>' . '<a href="index.php?action=ArticleController_displayArticle&id=' . $row["id"] . '" >' . $row["titlu"] . '</a>' . '</td><td>' . $row["continut"] . '</td></tr>';
}
echo '</tbody>';
echo '</table>';

$range = 3;
$prevpage = '';
$nextpage = '';
if ($currentpage > 1) {
    $prevpage = $currentpage - 1;
}

if ($currentpage != $totalpages) {
    $nextpage = $currentpage + 1;
}
echo "</div>";


echo '<div class="row">';


$currVal = ($currentpage - 1) * 10 + 1;
$currVal2 = $currVal + 10;
if ($currVal2 >= $numrows) {
    $currVal2 = $numrows;
}
echo '<div class="col-sm-10" id="table-info"><div class="dataTables_info" id="sample_2_info" role="status" aria-live="polite">Showing ' . $currVal . ' to ' . $currVal2 . ' of ' . $numrows . ' entries</div></div>';


echo "<div class=\"col\">
    <div class=\"dataTables_paginate paging_simple_numbers\" id=\"sample_2_paginate\">
        <ul class=\"pagination\">
           <li class=\"paginate_button previous \" aria-controls=\"sample_1\" tabindex=\"0\" id=\"sample_1_previous\">" . '<a href="index.php?action=CategoryController_displayCategories&id=' . $this->id . '&currentpage=' . $prevpage . '">' .
    " <i class=\"fa fa-angle-left\"></i></a></li>";
for ($x = ($currentpage - $range); $x < (($currentpage + $range) + 1); $x++) {
    if (($x > 0) && ($x <= $totalpages)) {
        if ($x == $currentpage) {
            echo '<li class="paginate_button active" aria-controls="sample_1" tabindex="' . $x . '">';
            echo "<a href='#'>" . $x . "</a>";


            echo '</li>';
        } else {
            echo '<li class="paginate_button" aria-controls="sample_1" tabindex="' . $x . '">';
            echo " <a href='index.php?action=CategoryController_displayCategories&id=$this->id&currentpage=$x'>$x</a> ";
            echo '</li>';
        }
    }
}

echo "<li class=\"paginate_button next\" aria-controls=\"sample_1\" tabindex=\"0\" id=\"sample_1_next\">";
echo " <a href='index.php?action=CategoryController_displayCategories&id=$this->id&currentpage=$nextpage'>";
echo "<i class=\"fa fa-angle-right\"></i></a></li>";
echo "</ul></div></div>";

echo '</div>';
echo '</div>';


echo '<div class="col-sm-6">';
echo "<br>";
echo '<div class="row">';
$i = 0;
foreach ($this->categorii as $cat) {

    echo "<div class=\"col-sm-6 \">";
    if ($this->id != $cat["id"]) {
        echo '<div class="portlet box green-jungle">';
        echo " <div class=\"portlet-title\">
                <div class=\"caption\">
                    <i class=\"fa fa-bookmark\"></i>";
    } else {
        echo '<div class="portlet box red-sunglo">';
        echo " <div class=\"portlet-title\">
                <div class=\"caption\">
                    <i class=\"fa fa-eye\"></i>";
    }

    echo '<a class="cat-link" href="index.php?action=CategoryController_displayCategories&id=' . $cat["id"] . '" >' . ucfirst($cat["nume"]) . '</a>';
    echo "    </div>
                <div class=\"tools\">
                    <a href=\"javascript:;\" class=\"expand\">
                    </a>

                </div>
            </div>
            <div class=\"portlet-body display-hide\">
                <div class=\"scroller\" style=\"height:200px\" data-always-visible=\"1\" data-rail-visible=\"1\"
                     data-rail-color=\"blue\" data-handle-color=\"red\">";
    echo $cat["descriere"];
    echo '</div>
            </div>
        </div>
    </div>';
    $i++;
    if ($i % 2 == 0) {
        echo '</div>';
        echo '<div class="row">';
    }

}
echo '</div>';
echo '</div>';

?>

</body>
</html>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php
        echo $this->title;
        ?></title>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="js/comment.js" type="application/javascript"></script>
    <link rel="stylesheet" type="text/css" href="css/datepicker3.css"/>
    <link rel="stylesheet" type="text/css" href="css/select2.css"/>
    <link rel="stylesheet" type="text/css" href="css/todo.css"/>
    <link href="css/style.css" type="text/css" rel="stylesheet">
</head>
<body>

<?php
include_once "header.php";
?>
<div class="article-container">
    <h1>
        <?php
        echo $this->title;
        ?>
    </h1>

    <div class="portlet box red-sunglo">
        <div class="portlet-title">
            <div class="caption">
                <i class="fa fa-user"></i>Autori
            </div>
            <div class="tools">
                <a href="javascript:;" class="collapse" data-original-title="" title="">
                </a>
            </div>
        </div>
        <div class="portlet-body">
            <ul>
                <?php
                foreach ($this->autori as $row) {
                    echo '<li>' . $row["nume"] . '</li>';
                }
                ?>
            </ul>
        </div>
    </div>

    <br>
    <div class="portlet box green-jungle">
        <div class="portlet-title">
            <div class="caption">
                <i class="fa fa-bookmark"></i>Categorii
            </div>
            <div class="tools">
                <a href="javascript:;" class="collapse" data-original-title="" title="">
                </a>
            </div>
        </div>
        <div class="portlet-body">
            <ul>
                <?php
                foreach ($this->categorii as $row) {
                    echo '<li><a href="index.php?action=HomeController_display&id=' . $row["id"] . '" >' . $row["nume"] . '</a></li>';
                }
                ?>
            </ul>
        </div>
    </div>


    <h2>Continut</h2>
    <div class="small-container">
        <div class="left-container">
            <p><?php
                echo $this->content;
                ?></p>
        </div>
        <div class="right-container">
            <div class="row">

                <div class="col-sm-4"> <?php
                    echo ' <img id="article-image" src="images/' . $this->img . '" alt="img"> ';
                    ?></div>
                <div class="col-sm-4"></div>
                <div class="col-sm-4"></div>
            </div>

        </div>
    </div>


    <div class="small-container">
        <div class="comments">


        </div>


        <div class="new-comment">

            <h3>Add a comment</h3>
            <form method="POST" id="comment_form">
                <div class="form-group">
            <textarea name="comment_content" id="comment_content" class="form-control" placeholder="Enter Comment"
                      rows="8" cols="40"></textarea>
                </div>
                <div class="form-group">
                    <input type="hidden" name="article_id" id="article_id" value="0"/>
                    <input type="submit" name="submit" id="submit" class="btn btn-info" value="Submit"/>
                </div>

            </form>

        </div>
    </div>
</div>
</body>
</html>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="css/jquery.dropdown.css">
    <style>
        label.error {
            color: red;
        }
    </style>
</head>
<body>
<?php
include_once "adminHeader.php";
?>
<h3 class="page-title">
    Edit Article
</h3>
<div class="page-bar">
    <ul class="page-breadcrumb">
        <li>
            <i class="fa fa-home"></i>
            <a href="index.php?action=HomeController_displayHomepage">Home</a>
            <i class="fa fa-angle-right"></i>
        </li>
        <li>
            <a href="index.php?action=ArticleController_manageArticles">Articles</a>
            <i class="fa fa-angle-right"></i>
        </li>
        <li>
            <a href="#">Edit article</a>
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

<form id="edit_article" class="form-horizontal" action="index.php?action=ArticleController_updateArticle" method="POST"
      enctype="multipart/form-data">
    <div class="col-md-12">
        <div class="portlet box green">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-gift"></i>Article
                </div>
                <div class="tools">
                    <a href="javascript:;" class="collapse" data-original-title="" title="">
                    </a>
                </div>
            </div>
            <div class="portlet-body form" style="display: block;">
                <!-- BEGIN FORM-->
                <form action="javascript:;" class="form-horizontal">
                    <div class="form-body">
                        <div class="form-group">
                            <label class="col-md-3 control-label">Title</label>
                            <div class="col-md-6">
                                <div class="input-group">
															<span class="input-group-addon input-circle-left">
															<i class="fa fa-font"></i>
															</span>

                                    <?php
                                    echo '<input class="form-control input-circle-right" placeholder="' . $this->title . '"type="text" id="article_title"
                                       name="article_title" value="' . $this->title . '">';
                                    echo '<input type="hidden" value="' . $this->id . '" name="id"/>';
                                    ?>


                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Content</label>
                            <div class="col-md-6">
                                <textarea class="form-control" style="max-width: 800px" name="article_content"
                                          id="article_content"><?php
                                    echo $this->content;
                                    ?>
												</textarea>
                                <span class="help-block">		</span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label">Categories</label>
                            <div class="col-md-4">
                                <div class="categories-list">
                                    <select id="select_list" style="display:none" name="categories[]" multiple
                                    >
                                        <?php
                                        $selected = $this->articlesCategories;
                                        foreach ($this->categories as $row) {
                                            if (in_array($row, $selected)) {
                                                echo '<option value="' . $row['id'] . '" selected>' . $row['nume'] . '</option>';
                                            } else {
                                                echo '<option value="' . $row['id'] . '" >' . $row['nume'] . '</option>';
                                            }
                                        }
                                        ?>
                                    </select>
                                    <input name="options" id="options" type="hidden">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label">Upload article image</label>
                            <div class="col-md-6">
                                <input type="file" name="fileToUpload" id="fileToUpload" name="fileToUpload">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label"></label>
                        <div class="col-md-6"><p id="error-mess"><?php
                                if (!is_null($this->error)) {
                                    echo $this->error;
                                }
                                ?></p></div>
                    </div>
                    <div class="form-actions">
                        <div class="row">
                            <div class="col-md-offset-3 col-md-9">
                                <button id="article-submit" type="submit" class="btn btn-circle blue">Submit
                                </button>
                                <button type="button" class="btn btn-circle default">Cancel</button>
                            </div>
                        </div>
                    </div>

                </form>
                <!-- END FORM-->
            </div>
        </div>
    </div>

</form>

<?php
include "adminFooter.php";
?>
<script>
    console.log(tt);
</script>

<script src="js/jquery.validate.js" type="text/javascript"></script>
<script src="js/editArticle.js"></script>
<script src="js/validateArticle.js" type="text/javascript"></script>
<script src="js/jquery.dropdown.js"></script>
</body>
</html>

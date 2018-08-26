confirmDelete = function (id) {

    var form_data = "article_id=" + id;
    if (confirm("Are you sure?!")) {
        $.ajax({
            type: 'POST',
            url: "index.php?action=ArticleController_deleteArticle",
            data: form_data,
            success: function () {

            }
        });
    }
}
confirmDeleteCategory = function (id) {

    var form_data = "category_id=" + id;
    if (confirm("Are you sure?!")) {
        $.ajax({
            type: 'POST',
            url: "index.php?action=CategoryController_deleteCategory",
            data: form_data,
            success: function () {
            }
        });
    }
}
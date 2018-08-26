$(document).ready(function () {
    var $commentsBoard = $(".comments");
    urlParam = function (name) {
        var results = new RegExp('[\?&]' + name + '=([^&#]*)').exec(window.location.href);
        if (results == null) {
            return null;
        }
        else {
            return decodeURI(results[1]) || 0;
        }
    }

    displayComments = function () {
        var form_data = "article_id=" + urlParam('id');

        $.ajax({
            type: 'POST',
            url: "index.php?action=ArticleController_getComments",
            data: form_data,
            success: function (response) {
                var comments = $.parseJSON(response);
                $commentsBoard.empty();

                for (var i = 0; i < comments.length; i++) {


                    $div = $('<div class="todo-tasklist-item todo-tasklist-item-border-green">');

                    $email = $('<div class="todo-tasklist-item-title"></div>');
                    $comment = $('<div class="todo-tasklist-item-text"></div>');
                    $dateDiv = $('<div class="todo-tasklist-controls pull-left">');

                    $dateSpan = $('<span class="todo-tasklist-date">');
                    $icon = $('<i class="fa fa-calendar">');

                    $email.text(comments[i]["useremail"]);
                    $comment.text(comments[i]["comment"]);
                    $dateSpan.text(comments[i]["commentdate"]);
                    $dateSpan.append($icon);
                    $dateDiv.append($dateSpan);
                    $div.append($email);
                    $div.append($comment);
                    $div.append($dateDiv);
                    $commentsBoard.append($div);
                }
            },
            error: function (xhr, desc, err) {
                console.log(xhr);
                console.log(desc);
                console.log(err);

            }


        });
    }
    displayComments();

    $('#comment_form').on('submit', function (event) {
        event.preventDefault();
        $('#article_id').val(urlParam('id'));
        var form_data = $(this).serialize();
        $.ajax({
            type: 'POST',
            url: "index.php?action=ArticleController_addComment",
            data: form_data,
            success: function (response) {
                console.error(response)
                if (response > 0) {
                    displayComments();
                    $('#comment_content').val('');
                } else {
                    alert("Please login in order to comment");
                }

            }, error: function (xhr, desc, err) {
                console.log(xhr);
                console.log(desc);
                console.log(err);

            }

        });


    });


});




$().ready(function () {
    list = $('#select_list');

    $.validator.addMethod("selectcheck", function (value) {
        var options = $('#select_list > option:selected');
        return options.length !== 0;

    })
    $('#edit_article').validate({
        ignore: "",
        rules: {
            article_title: {
                required: true,
                minlength: 5,
            },
            article_content: {
                required: true,
            },
            "categories[]": {
                selectcheck: true
            },

            fileToUpload: {
                required: true
            }

        },
        messages: {
            article_title: {
                required: "Please enter a title",
                minlength: "Your title must consist of at least 5 characters"
            },
            article_content: {
                required: "Please enter a content",
            },
            "categories[]": {
                selectcheck: "Please select a category",
            },
            fileToUpload: {
                required: "Please enter an image",
            }
        }
    });


    $("#article-submit").click(function () {

        if ($('#edit_article').valid()) {

        } else {

        }
    })

});
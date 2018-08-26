$().ready(function () {
    $.validator.addMethod("pwcheck", function (value) {
        return /^[A-Za-z0-9\d!@#$%^&*()\-_=+{};:,<.>]*$/.test(value) // consists of only these
            && /[a-z]/.test(value) // has a lowercase letter
            && /[A-Z]/.test(value) // has a lowercase letter
            && /\d/.test(value) // has a digit
            && /[!@#$%^&*()\-_=+{};:,<.>]/.test(value) // special char
    })

    $('form').validate({
        rules: {
            name: {
                required: true,
                minlength: 2
            },
            password: {
                required: true,
                pwcheck: true,
                minlength: 8
            },
            email: {
                required: true,
                email: true
            }

        },
        messages: {
            name: {
                required: "Please enter a username",
                minlength: "Your username must consist of at least 2 characters"
            },
            password: {
                required: "Please provide a password",
                pwcheck: "Enter a valid password",
                minlength: "Your password must be at least 8 characters long"
            },
            email: "Please enter a valid email address",
        }
    });


    $("#register").click(function () {
        event.preventDefault();
        if ($('form').valid()) {
            alert('form is valid - not submitted');
        } else {
            alert('form is not valid');
        }
    })

});
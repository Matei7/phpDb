<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link href="css/login.css" type="text/css" rel="stylesheet">
    <script src="js/jquery.min.js" type="text/javascript"></script>
    <script src="js/jquery.validate.js" type="text/javascript"></script>
<!--    <script src="js/validateUser.js" type="application/javascript"></script>-->

</head>
<body>

<div class="div-form">
    <form id="#signup-form" class="login-form" action="index.php?action=LoginController_register" method="POST">
        <p><label for="name" class="floatLabel">Full Name</label>
            <input name="name" id="name" type="text" placeholder="name" required/>
        </p>
        <p><label for="email" class="floatLabel">Email</label>
            <input name="email" id="email" type="email" placeholder="email" required/>
        </p>
        <p><label for="name" class="floatLabel">Password</label>
            <input name="password" id="password" type="password"
                   placeholder="Min of 8 chars 1 uppercase letter 1 lowercase letter 1 number " required/>
        </p>
        <p id="error-mess"><?php
            if (!is_null($this->error)) {
                echo $this->error;
            }
            ?></p>
        <button type="submit" class="submit-button" id="register">Register</button>


    </form>
    <br>
    <button type="submit" class="submit-button"><a href="index.php?action=LoginController_displayLogin"
                                                   style="text-decoration: none;color: white">Login</a></button>
</div>
</body>
</html>
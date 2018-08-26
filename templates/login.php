<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link href="css/login.css" type="text/css" rel="stylesheet">
</head>
<body>

<div class="div-form">
    <form class="login-form" action="index.php?action=LoginController_login" method="POST">
        <input name="email" id="email" type="email" placeholder="email" required/>
        <input name="password" id="password" type="password" placeholder="password" required/>
        <p id="error-mess"><?php
            if (!is_null($this->error)) {
                echo $this->error;
            }
            ?></p>
        <button type="submit" class="submit-button">Login</button>
        <br>

    </form>
    <br>
    <button type="submit" class="submit-button"><a href="index.php?action=LoginController_displayRegister"
                                                   style="text-decoration: none;color: white">Register</a></button>
</div>
</body>
</html>
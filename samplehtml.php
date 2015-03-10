<?php

const LOGIN_HTML=<<<HTML
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="home_page.css">

</head>

<body>
    <div id="header">
        <header>
            Welcome to talk show
        </header>
    </div>
    <div id="form">
        <form action="loginVarify.php" method="post">
            <!-- <label for="name">name:</label> -->
            <!-- <br> -->
            <input type="text" id="name" name="name" placeholder="name" autocomplete="off" autofocus="autofocus"/>
            <br>
            <!-- <label for="pwd">password:</label> -->
            <!-- <br> -->
            <input type="password" id="pwd" name="pwd" placeholder="password" autocomplete="off"/>
            <!-- <a href="forgotpassword.php">forget password</a> -->
            <br>
            <input type="submit" name="login" id="login" value="Login" />
            <br>
            <input type="button" name="register" id="register" value="Register" />
        </form>
    </div>
    <div class="footer">
        <footer>
            &copy; 2014-2015 powered by lin jian you.
            <p> All right reserved.
            <p> Email: <a id="my_email" href="mailto://jaysen.lin@foxmail.com">jaysen.lin@foxmail.com</a>
        </footer>
    </div>
    <script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
    <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
     <script>
        $("#register").click(function() {
         location.href='register_page.php';
        });
    </script>
</body>

</html>
HTML;

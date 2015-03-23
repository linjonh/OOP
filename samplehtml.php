<?php

const LOGIN_HTML=<<<HTML
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, initial-scale=1">
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
            <!--<input type="button" name="register" id="register" value="Register" />-->
            <a id="register_link" href="register.php">Register a new account</a>
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
        $("#register_link").click(function() {
         location.href='register.php';
        });
    </script>
	<script src="form-validate.js"></script>
</body>

</html>
HTML;

const REGISTER_HTML=<<<HTML
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, initial-scale=1">
    <title>Register</title>
    <link rel="stylesheet" href="home_page.css">

</head>

<body>
    <div id="header">
        <header>
            Register to talk show
        </header>
    </div>
    <div id="form">
        <form action="loginVarify.php" method="post">
            <!-- <label for="name">name:</label> -->
            <!-- <br> -->
            <input type="text" id="name" name="name" placeholder="Name" autocomplete="off" autofocus="autofocus"/>
            <br>
            <input type="Email" id="email" name="email" placeholder="Email" autocomplete="off"/>
            <br>
            <!-- <label for="pwd">password:</label> -->
            <!-- <br> -->
            <input type="password" id="pwd" name="pwd" placeholder="Password" autocomplete="off"/>
            <br>
            <input type="password" id="confirm_pwd" name="confirm_pwd" placeholder="Confirm password" autocomplete="off"/>
            <!-- <a href="forgotpassword.php">forget password</a> -->
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
    <script src="form-validate.js"></script>
</body>

</html>
HTML;

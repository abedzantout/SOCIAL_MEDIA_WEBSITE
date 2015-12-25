<?php
session_start();
require_once 'functions.php';
?>
<html>
    <head>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Log In | Sonder</title>
        <link rel="icon" href="img/favicon.ico" type="image/x-icon">

        <link rel="stylesheet" href="css/reset.css" type="text/css"> <!-- CSS reset -->
        <link rel="stylesheet" href="css/login.css" type="text/css"> <!-- main styling -->


        <script src="js/jquery-2.1.1.js"></script>
        <script src="js/showpassword.js"></script>
    </head>
    <body>
        <?php
        $error = $user = $pass = "";

        if (isset($_POST['user'])) {
            $user = sanitizeString($_POST['user']);
            $pass = sanitizeString($_POST['pass']);
            $pass = md5("hash" . $pass);
            if ($user == "" || $pass == "")
                $error = "Not all fields were entered<br>";
            else {
                $result = queryMySQL("SELECT user,pass FROM members
							WHERE user='$user' AND pass='$pass'");

                if ($result->num_rows == 0) {
                    $error = "<span class='error'>Username/Password
			  invalid</span><br><br>";
                } else {
                    $_SESSION['user'] = $user;
                    $_SESSION['pass'] = $pass;
                    header("location:members.php");
                }
            }
        }
        ?>


        <img id="logo" src="img/logo.png" alt="logo"/>


        <div id="login"> 
            <form class = "login-form" method='post' action='login.php'>
                <p class="fieldset">
                    <label class="image-replace cd-username fieldname" for="signin-email">Username</label>
                    <input type='text' class="full-width has-padding has-border" id="signin-email" maxlength='16' placeholder="Username" name='user' value='<?= $user ?>'/><br>
                </p>
                <p class="fieldset">
                    <label class="image-replace cd-password fieldname" for="signin-password">Password</label>
                    <input class="full-width has-padding has-border" id="signin-password" type='password' maxlength='16'  placeholder="Password" name='pass' value='<?= $pass ?>'/>
                    <a href="#0" class="hide-password">Show</a>
                </p>
                <p class="fieldset">
                    <input class="full-width fieldname" type='submit' value='Log In'>
                    <!-- to style -->
                    <span class=""><?= $error ?></span>
                </p>
            </form>
            <p class="login-form-bottom-message">Don't have an account? <a href="signup.php">Create one</a></p>
        </div>
    </body>
</html>
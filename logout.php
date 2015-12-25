<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <link rel="stylesheet" href="css/reset.css" type="text/css"> <!-- CSS reset -->
        <link rel="stylesheet" type="text/css" media="all" href="css/styleBoxLogout.css">
        <script src="js/jquery-2.1.1.js" type="text/javascript"></script> <!-- JQuery -->
    </head>
<?php
 
session_start();
require_once 'functions.php';

if (isset($_SESSION['user'])) {
    destroySession();
    header("location:index.php");
} else {
    ?>
    <body>
         <div class="notify errorbox"> 
             <h1>Warning!</h1> 
             <span class="alerticon">
                 <img src="img/notificationBox/error.png" alt="error" />
             </span> 
             <p>You cannot log out because you are not logged in</p> 
         </div> 
    </body>
<?php } ?>
</html>

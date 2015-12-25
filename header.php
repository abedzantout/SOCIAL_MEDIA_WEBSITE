<!DOCTYPE html>
<?php 
 require_once 'functions.php';
 $userstr = '';

if (isset($_SESSION['user'])) {
    $user = $_SESSION['user'];
    $loggedin = TRUE;
    $userstr = " ($user)";
}

if (!$loggedin)
    die();
?>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Style sheets -->
        <link rel="stylesheet" href="css/reset.css" type="text/css"> <!-- CSS reset -->
        <link rel="stylesheet" href="css/home.css" type="text/css"> <!-- main style -->

        <!-- Additional Standarized Javascript Libraries for enhanced user experience -->
        <script src="js/jquery-2.1.1.js" type="text/javascript"></script> <!-- JQuery -->

        <!-- Sidebar Javascript Implementation-->
        <script src="js/sidebar.js" type="text/javascript"></script>


        <title>Sonder</title>
        <link href="img/favicon.ico" rel="icon" type="image/x-icon">
    </head>

    <body>
        <div class='wrapper'>
            <div class='sidebar'>
                <div class='title'>
                
                    <?php
                        echo $user;
                        if(file_exists('user_images/'.$user.'.jpg')){
                            echo "<img src = 'user_images/$user.jpg' alt='profile pic' class='userImage' />";
                        }
                        else {
                             echo "<img src = 'img/logo-small.png' alt='profile pic' class='userImage' />";
                        }
                    ?>
                    
                </div>
                <ul class='nav'>
                    <li><a href='members.php' >Members</a></li>
                    <li><a href='friends.php' >Friends</a></li>
                    <li><a href='messages.php'>Messages</a></li>
                    <li><a href='profile.php'>Edit Profile</a></li>
                    <li><a href='logout.php'>Logout</a></li>
                </ul>
            </div>

            <div class='content isOpen'>
                <a class='sidebar-button'></a>
                  <div class = "siteContent">
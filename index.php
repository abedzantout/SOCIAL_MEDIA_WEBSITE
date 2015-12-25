<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php
        require_once 'functions.php';

        $userstr = '';

        if (isset($_SESSION['user'])) {
            $user = $_SESSION['user'];
            $loggedin = TRUE;
            $userstr = " ($user)";
        } else
            $loggedin = FALSE;
        if ($loggedin) {
            header('location:home.php');
        } else {
		?>
			<meta charset="UTF-8">
			<meta name="viewport" content="width=device-width, initial-scale = 1">

			<title>Sonder <?php echo "$appname$userstr"; ?></title>
			<link rel="icon" href="img/favicon.ico" type="image/x-icon">
			
			<!-- Style sheets -->
			<link rel="stylesheet" href="css/reset.css" type="text/css"> <!-- CSS reset -->
			<link rel="stylesheet" href="css/index.css" type="text/css"> <!-- main styling -->

			<!-- Additional Standarized Javascript Libraries for enhanced user experience -->
			<script src="js/modernizr.js" type="text/javascript"></script> <!-- Modernizr -->
			<script src="js/jquery-2.1.1.js" type="text/javascript"></script> <!-- JQuery -->

			<!--User Made/Lesser Known  Libraries -->
			<script src="js/parallax.js-1.3.1/parallax.js" type="text/javascript"></script> <!-- Parallax Library, Credit: pixelcog -->

			<!--Main Javascript Implementation-->
			<script src="js/index.js" type="text/javascript"></script> <!-- BackGround jQuery Implementation -->
			<script src = "js/signup.js" type = "text/javascript"></script>
        </head>

        <body>
            <nav id="vertical-nav">
                <ul>
                    <li>
                        <a href="#section1" data-number="1">
                            <span class="cd-dot"></span>
                            <span class="cd-label cd-signup">Get Started</span>
                        </a>
                    </li>
                    <li>
                        <a href="#section2" data-number="2">
                            <span class="cd-dot"></span>
                            <span class="cd-label">Learn More</span>
                        </a>
                    </li>
                    <li>
                        <a href="#section3" data-number="3">
                            <span class="cd-dot"></span>
                            <span class="cd-label">Features</span>
                        </a>
                    </li>
                </ul>
            </nav>


            <section id="section1" class="cd-section" data-parallax="scroll" data-image-src="img/bg/1.jpg">
                <span class="main-nav">
                    <a class="cd-signin" href="login.php">Sign in</a>
                </span>

                <div id="logo"><img src="img/logo.png" alt="logo"/></div>
                <p id="slogan">Everyone has a story to share. Share yours now. It's easy, and free.</p>

                <span class="section-nav">
                    <ul>
                        <li><a id="signup" class="cd-signup" href="signup.php">Get Started</a></li>
                        <li><a id="learnmore" class="cd-learnmore" href="#section2">Learn More</a></li>
                    </ul>
                </span>

                <a href="#section2" class="cd-scroll-down cd-img-replace">scroll down</a>
            </section>

            <section id="section2" class="cd-section" data-parallax="scroll" data-image-src="img/bg/10.jpg">
                <h1>Get connected with anyone, anywhere in the world. Right here on Sonder.</h1>
                <p>
                    We've got yuou covered. Sonder gives you all the necessary tools to connected with your friends and familly.
					Create an account now and browse for loved ones. Add them to your list and start communicating!
                </p>
                <span class="section-nav">
                    <ul>
                        <li><a id="signup" class="cd-signup" href="signup.php">Get Started</a></li>
                    </ul>
                </span>
                <a href="#section3" class="cd-scroll-down cd-img-replace">scroll down</a>
            </section>

            <section id="section3" class="cd-section" data-parallax="scroll" data-image-src="img/bg/15.jpg">
                <h1>Share your story to the world. Communicating has never been easier!</h1>
                <p>
                    We make it possible for you to communicate with anyone in the world. Thanks to our
					intuitive and elegant design, you'll be able to share stories with your loved ones in no time.
                </p>
                <span class="section-nav">
                    <ul>
                        <li><a id="signup" class="cd-signup" href="signup.php">Get Started</a></li>
                    </ul>
                </span>
                <a href="#section1" class="cd-scroll-down cd-img-replace">scroll down</a>
            </section>
        </body>
<?php } ?>
</html>
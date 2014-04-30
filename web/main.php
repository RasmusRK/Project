<?php
include_once 'includes/db_connect.php';
include_once 'includes/functions.php';
 
sec_session_start();
?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="A layout example with a side menu that hides on mobile, just like the Pure website.">
    <title>Projects</title>
<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.4.2/pure.css">

    <!--[if lte IE 8]>
        <link rel="stylesheet" href="css/layouts/side-menu-old-ie.css">
    <![endif]-->
    <!--[if gt IE 8]><!-->
        <link rel="stylesheet" href="css/layouts/side-menu.css">
    <!--<![endif]-->
  </head>

        <?php if (login_check($mysqli) == true) : ?>
            <div id="layout">
    <!-- Menu toggle -->
    <a href="#menu" id="menuLink" class="menu-link">
        <!-- Hamburger icon -->
        <span></span>
    </a>

    <div id="menu">
        <div class="pure-menu pure-menu-open">
            <a class="pure-menu-heading" href="main.php">Test</a>

            <ul>
                <li><a href="mine_projekter.html">Mine projekter</a></li>
                <li><a href="alle_projekter.html">Alle projekter</a></li>
                <a href="historik.html">Min historik</a>
                <li><a href="contact.php">Kontakt</a></li>
                <br><br>
                <li>Logget ind som 123</li>
                <li><a href="includes/logout.php">Log ud</a></li>
            </ul>
        </div>
    </div>

    <div id="main">
        <div class="header">
            <h1>Alle projekter</h1>
            <h2>Liste over projekter</h2>


        </div>

        <div class="content">
            <h2 class="content-subhead">Titel</h2>
            <p>
                Tekst
                <?php if (check_admin($mysqli) == true) : ?>
                    <br> You are admin! <br>
                <?php else : ?>
                    <br> You are not admin! <br>
                <?php endif; ?>
            </p>
        </div>
    </div>
</div>

<script src="js/ui.js"></script>
</body>
        <?php else : ?>
            <p>
                <span class="error">You are not authorized to access this page.</span> Please <a href="index.php">login</a>.
            </p>
        <?php endif; ?>

    </body>

</html>

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

<body>
    <?php if (login_check($mysqli) == true) : ?>
            <div id="layout">
    <!-- Menu toggle -->
    <a href="#menu" id="menuLink" class="menu-link">
        <!-- Hamburger icon -->
        <span></span>
    </a>

    <div id="menu">
        <div class="pure-menu pure-menu-open">
            <a class="pure-menu-heading" href="#">Test</a>

            <ul>
                <li><a href="mine_projekter.html">Mine projekter</a></li>
                <li><a href="alle_projekter.html">Alle projekter</a></li>
                <a href="historik.html">Min historik</a>
                <li><a href="contact.html">Kontakt</a></li>
                <br><br>
                <li>Logget ind som 123</li>
                <li><a href="#">Log ud</a></li>
            </ul>
        </div>
    </div>

    <div id="main">
        <div class="header">
            <h1>Kontakt</h1>
            <h2>Her kan adminstrator af siden kontaktes</h2>
        </div>

        <div class="content">
            <h2 class="content-subhead">Titel</h2>
            <p>
                Tekst
            </p>
        </div>
    </div>
</div>

<script src="js/ui.js"></script>
        <?php else : ?>
            <p>
                <span class="error">You are not authorized to access this page.</span> Please <a href="index.php">login</a>.
            </p>
        <?php endif; ?>


</body>
</html>

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
<link rel="stylesheet" href="css/pure.css" />
<link rel="stylesheet" href="css/pure-form.css" />

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
            <a class="pure-menu-heading" align="center" href="main.php"><img src="logo1.png"></a>

            <ul>
                <li><a href="my_projects.php">Mine projekter</a></li>
                <li><a href="all_projects.php">Alle projekter</a></li>
                <li><a href="history.php">Min historik</a></li>
                <li><a href="contact.php">Kontakt</a></li>
                <br><br>
                <li><a href="includes/logout.php">Log ud</a></li>
            </ul>
        </div>
    </div>

    <div id="main">
        <div class="header">
            <h1>Opret nyt projekt</h1>
            <h2>Udfyld følgende for oprette et nyt projekt</h2>
        </div>

        <div class="content">
            <h2 class="content-subhead"></h2>
            
            <form class="pure-form pure-form-stacked">
            <fieldset>
                    <div>
                    <label for="projektname"><b>Projekt navn</b></label>
                    <input id="projektname" type="text" placeholder="Indtast navn" />
                    </div>
                    <br><br>
                    <div>
                    <label for="category"><b>Kategori</b></label>
                    <select><a href="#">Tilføj ny kategori</a>
                        <option value="0">Vælg kategori</option>
                        <?php ?>
                    </select>
                    <br><br>
                    <a href="#">Tilføj ny kategori</a>
                    </div>
                    <br>
                    <div>
                    <label for="date"><b>Dato</b></label>
                    <input id="date" type="date"/>
                    </div>
                    <br><br>
                    <label for="description"><b>Beskrivelse af projekt</b></label>
                    <input id="description" type="text" placeholder="Indtast beskrivelse af projektet"/>
                    <br><br>
                    <label for="info"><b>Info</b></label>
                    <textarea type="text" rows="4" cols="50"></textarea>
                    <br><br><br><br>
                    <input class="btn left" type="button" value="Tilføj projekt" onclick="#"/> 
            </fieldset>
            </form>

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

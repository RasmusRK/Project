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
<link rel="stylesheet" href="css/pure.css"/>
<link rel="stylesheet" href="css/pure-form.css" />

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
            <a class="pure-menu-heading" align="center" href="main.php"><img src="logo1.png"></a>

            <ul>
                <li><a href="my_projects.php">Mine projekter</a></li>
                <li><a href="all_projects.php">Alle projekter</a></li>
                <li><a href="history.php">Min historik</a></li>
                <li><a href="contact.php">Kontakt</a></li>
                <br><br>
                <li>Logget ind som: <?php echo $_SESSION['username'];?></li>
                <li>Du har bruger id: <?php echo $_SESSION['user_id'];?></li>
                <li><a href="includes/logout.php">Log ud</a></li>
            </ul>
        </div>
    </div>

    <div id="main">
        <div class="header">
            <h1>Kontakt</h1>
            <h2>Her kan adminstrator kontaktes</h2>
        </div>

        <div class="content">
            <h2 class="content-subhead"></h2>
            
            <form class="pure-form pure-form-stacked" method="post" action="<?php echo esc_url($_SERVER['PHP_SELF']); ?>">

                <div>
                <label for="firstname"><b>Fornavn</b></label>
                <input type="text" name="first_name">
                </div>

                <br><br>

                <div>
                <label for="lastname"><b>Efternavn</b></label>
                <input type="text" name="last_name">
                </div>

                <br><br>
                
                <div>
                <label for="email"><b>Email</b></label>
                <input type="text" name="email">
                </div>
                
                <br><br>
                
                <label for="message"><b>Besked</b></label>
                <textarea rows="5" name="message" cols="50"></textarea>
                
                <br><br><br><br>
                
                <input class="btn left" type="submit" name="submit" value="Submit">
                </form>
        
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

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
    <title>Projects</title>
    <link rel="stylesheet" href="css/pure-web.css">
    <link rel="stylesheet" href="css/side-menu.css">
    <link rel="stylesheet" href="css/pure.css">
</head>

<body>
    <?php if (login_check($mysqli) == true) : ?>
    <div id="layout">
        <a href="#menu" id="menuLink" class="menu-link">
            <span></span>
        </a>

        <?php menu(); ?>

        <div id="main">
            <div class="header">
                <h1>Alle projekter</h1>
                <h2>Liste over alle projekter</h2>
            </div>

            <div class="content">
                <h2 class="content-subhead"></h2>
                <p> <?php show_projects($mysqli); ?> </p>
            </div>
        </div>
    </div>

    <script src="js/ui.js"></script>
        <?php else : ?>
            <p>
                <span class="error">Du har ikke rettigheder til at komme ind på siden.</span> Gå venligst tilbage til <a href="index.php">login siden</a>.
            </p>
        <?php endif; ?>
</body>

</html>

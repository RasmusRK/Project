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
</head>

<?php if (login_check($mysqli) == true) : ?>
<div id="layout">
    <a href="" id="menuLink" class="menu-link">
        <span></span>
    </a>

    <?php menu(); ?>

    <div id="main">
        <div class="header">
            <h1>Forside</h1>
            <h2>Beskrivelse</h2>
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
            <span class="error">Du har ikke rettigheder til at komme ind på siden.</span> Gå venligst tilbage til <a href="index.php">login siden</a>.
        </p>
    <?php endif; ?>
</body>

</html>

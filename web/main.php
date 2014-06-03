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

    <div id='menu'>
            <div class='pure-menu pure-menu-open'>
                <a class='pure-menu-heading' align='center' href='main.php'><img src='img/logo.png'></a>
                    <ul>
                    <li><a href='my_projects.php'>Mine projekter</a></li>
                    <li><a href='all_projects.php'>Alle projekter</a></li>
                    <li><a href='history.php'>Min historik</a></li>
                    <li><a href='contact.php'>Kontakt</a></li>
                    <?php if (check_admin($mysqli) == true) : ?>
                    <li> <a href='new_project.php'>Nyt projekt</a></li>
                    <li> <a href ='sql_table_to_pdf/generate-pdf.php'> Print </a></li>
                    <?php endif; ?>
                    <?php if (check_overadmin($mysqli) == true) : ?>
                    <li> <a href='administrator.php'>Administrator</a></li>
                    <?php endif; ?>
                    <li><a class='logout' href='includes/logout.php'>Log ud</a></li>
                </ul>
            </div>
        </div>

    <div id="main">
        <div class="header">
            <h1>Forside</h1>
            <h2>Beskrivelse</h2>
        </div>

        <div class="content">
            <h2 class="content-subhead">Titel</h2>
            <p>Tekst</p>
            <?php checkbrute($_SESSION['user_id'], $mysqli); ?>
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

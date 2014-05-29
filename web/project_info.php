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
    <title>Projekt</title>
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
            <h1><?php echo project_name($mysqli, $_REQUEST['pid']); ?></h1>
            <h2>Kategorien: <?php echo project_category($mysqli, $_REQUEST['pid']); ?></h2>
        </div>

        <div class="content">
            <h2 class="content-subhead"></h2>
            <p>
                <?php 
                    $pid = $_REQUEST['pid']; 
                    echo "Projektid: " . $pid . "<br>";
                ?>
                Oprettelses dato: <?php echo project_startdate($mysqli, $_REQUEST['pid']) ?><br>
                Afsluttelses date: <?php echo project_enddate($mysqli, $_REQUEST['pid']) ?><br><br>
                Kort info over projektet:<br><br>
                <?php echo project_info($mysqli, $_REQUEST['pid']); ?> <br><br>
                <?php if (check_admin($mysqli) == true) : ?>
                <?php if (check_afsluttet($mysqli, $pid) == true) : ?>
                Afslut projekt: 
                <?php if($_GET['button1']){close_projekt($mysqli, $_REQUEST['pid']);} ?>
                <button id="btnfun1" name="btnfun1" onClick='location.href="?button1=1&pid=<?php echo $_REQUEST['pid']; ?>"' value="Refresh">Afslut</button><br><br>
                <?php endif ; ?>
                <?php endif ; ?>
                Liste med alle der har arbejdet på projektet: <br>
                <?php project_history($mysqli, $_REQUEST['pid']); ?><br>    
                Det samlede antal timer lagt i projektet: <?php echo projekt_timer_sum($mysqli, $_REQUEST['pid']); ?> <br>                
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

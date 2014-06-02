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
                    <?php endif; ?>
                    <?php if (check_overadmin($mysqli) == true) : ?>
                    <li> <a href='administrator.php'>Administrator</a></li>
                    <li> <a href ='sql_table_to_pdf/generate-pdf.php'> Print </a></li>
                    <?php endif; ?>
                    <li><a class='logout' href='includes/logout.php'>Log ud</a></li>
                </ul>
            </div>
        </div>

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

                Liste med alle der har arbejdet på projektet: <br>
                <?php project_history($mysqli, $_REQUEST['pid']); ?><br>        
                Det samlede antal timer lagt i projektet: <?php echo projekt_timer_sum($mysqli, $_REQUEST['pid']); ?> <br><br>

                <?php if (check_admin($mysqli) == true) : ?>
                    <?php if (check_afsluttet($mysqli, $pid) == true) : ?>
                        Afslut projekt: 
                        <form>
                            <button type="submit" name="Afslut" value="Afslut">Afslut</button><br><br>
                            <?php close_projekt($mysqli, $_REQUEST['pid']); 
                                if(!empty($_REQUEST['Afslut'])) {
                                echo '<META HTTP-EQUIV="Refresh" Content="0; URL=all_projects.php">';
                                }?>
                        </form>
                    <?php endif ; ?>
                <?php endif ; ?>

                <?php if (check_admin($mysqli) == true) : ?>
                    <?php if (check_afsluttet($mysqli, $pid) == false) : ?>
                        Åben projektet igen: 
                        <form>
                            <button type="submit" name="Åben" value="Åben">Åben</button><br><br>
                            <?php open_projekt($mysqli, $_REQUEST['pid']); 
                            if(!empty($_REQUEST['Åben   '])) {
                                echo '<META HTTP-EQUIV="Refresh" Content="0; URL=all_projects.php">';
                                }?>

                        </form>
                    <?php endif ; ?>
                <?php endif ; ?>                
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

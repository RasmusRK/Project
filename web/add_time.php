<?php
include_once 'includes/psl-config.php';
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
    <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.4.2/pure.css">
    <link rel="stylesheet" href="css/pure.css">
    <link rel="stylesheet" href="css/side-menu.css">
    <link rel="stylesheet" href="css/pure-form.css"/>
</head>

<?php if (login_check($mysqli) == true) : ?>
<?php if (0 < $_REQUEST['pid']) { $pid = $_REQUEST['pid']; } ?>
<input type='hidden' name='pid' value='$pid'>
<?php if ($_REQUEST['pid'] > 0) : ?>

<div id="layout">
    <a href="" id="menuLink" class="menu-link">
        <span></span>
    </a>

    <div id="menu">
        <div class="pure-menu pure-menu-open">
            <a class="pure-menu-heading" align="center" href="main.php"><img src="img/logo1.png"></a>

            <ul>
                <li><a href="my_projects.php">Mine projekter</a></li>
                <li><a href="all_projects.php">Alle projekter</a></li>
                <li><a href="history.php">Min historik</a></li>
                <li><a href="contact.php">Kontakt</a></li>
                <?php if (check_admin($mysqli) == true) : ?>
                <li> <a href="new_project.php">Nyt projekt</a></li>
                <?php endif; ?>
                <li><a class="logout" href="includes/logout.php">Log ud</a></li>
            </ul>
        </div>
    </div>

    <div id="main">
        <div class="header">
            <h1>Tilføj tid til projekt </h1>
            <h2>Udfyld formen for at indskrive timer på projektet.</h2>
        </div>

        <div class="content">
            <h2 class="content-subhead"></h2>
            
            <form class="pure-form pure-form-stacked" action="<?php echo esc_url($_SERVER['PHP_SELF']); ?>"   name="registration_form">
                      <?php
                    echo '<input type="hidden" name="pid" value="' .$pid .'">';
                    ?>
                <div>
                    <label for="timer"><b>Timer</b></label>
                    <input id ="timer" type="text" name="timer" required />
                </div>
                    <br><br>
                <div>
                    <label for="date"><b>Dato(yyyy-mm-d)</b></label>
                    <input id="date" type="text" name="date" required/>
                </div>
                <br><br>
                <div>
                    <label for="info"><b>Beskrivelse</b></label>
                    <textarea id="info" type="text" name="info" rows="4" cols="50"></textarea>
                </div>
                <br><br>
                <div>
                    <br><br>
                    <input class="btn right" type="submit" value="Tilføj timer"/> 

                </div>

                <?php
                    if(isset($_REQUEST['timer'], $_REQUEST['date'], $_REQUEST['info'])) {
                        $timer = $_REQUEST['timer'];
                        $date = ($_REQUEST['date']);
                        $info = $_REQUEST['info'];
                        $userid = $_SESSION['user_id'];
                       
                            
                        if ($insert = $mysqli->prepare("INSERT INTO work_on (user_id, project_id, hours, date, info) VALUES ($userid,$pid,$timer,'$date','$info')")){
                                if (!$insert->execute()) {
                                    header('Location: ../error.php?err=Registration failure: INSERT'); 
                            }
                        header('Location: ./all_projects.php');
                        }
                    }
                ?>
            </form>
        </div>
    </div>
</div>

<script src="js/ui.js"></script>

</body>
    <?php else : ?>
        <?php header('Location: ./all_projects.php');
        die();?>
    <?php endif; ?> 
    <?php else : ?>
        <p>
            <span class="error">Du har ikke rettigheder til at komme ind på siden.</span> Gå venligst tilbage til <a href="index.php">login siden</a>.
        </p>
    <?php endif; ?>

</body>

</html>
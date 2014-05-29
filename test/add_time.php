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
    <link href="http://bootswatch.com/cosmo/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
</head>

<?php if (login_check($mysqli) == true) : ?>
<?php if (0 < $_REQUEST['pid']) { $pid = $_REQUEST['pid']; } ?>
<input type='hidden' name='pid' value='$pid'>
<?php if ($_REQUEST['pid'] > 0) : ?>

<div id="layout">
    <a href="" id="menuLink" class="menu-link">
        <span></span>
    </a>

    <?php menu(); ?>

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
                    <label for="date"><b>Dato (yyyy-mm-d)</b></label>
                    <input id="date" type="text" name="date" required/>
                </div>
                <br><br>
                <div>
                    <label for="info"><b>Beskrivelse</b></label>
                    <textarea id="info" type="text" name="info" rows="4" cols="50"></textarea>
                </div>
                <br><br>
                <div>
                    <br><br><br>
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
                        echo '<META HTTP-EQUIV="Refresh" Content="0; URL=all_projects.php">';
                        
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
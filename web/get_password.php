<?php
include_once 'includes/update.inc.php';
include_once 'includes/functions.php';
include_once 'includes/psl-config.php';
include_once 'includes/db_connect.php';

sec_session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Project</title>
        <script type="text/JavaScript" src="js/sha512.js"></script> 
        <script type="text/JavaScript" src="js/forms.js"></script>
    </head>
    <div>
    <?php if (login_check($mysqli) == true) : ?>
    <?php if (0 < $_REQUEST['uid']) { $uid = $_REQUEST['uid']; } ?>
    <?php if (check_overadmin($mysqli) == true) : ?>
    <?php if ($_REQUEST['uid'] > 0) : ?>

        <h1>Gendan password</h1>

        <form action="<?php echo esc_url($_SERVER['PHP_SELF']); ?>" method="post" name="registration_form">
            <input type="hidden" name="uid" value="<?php echo $uid; ?>">
            Indtast det nye password<br>
            Passwords skal være mindst 6 tegn langt<br>
            Passwords må indeholde følgende<br>
            Mindst et stort bogstav (A..Z)<br>
            Mindst et lille bogstav (a..z)<br>
            Mindst et nummer (0..9)<br><br>

            <div>
                <label for="password">Password</label>
                <input id ="password" type="password" name="password" /><br>

                <a href="administrator.php"><input class="btn left" type="button" value="Tilbage"/></a>
                <input class="btn right" type="button" value="Gendan" 
                          onclick="return formhash(this.form,
                                          this.form.password);" /> 
            </div>
        </form>
    </div>

<script src="js/ui.js"></script>

<body>
    <?php else : ?>
        <?php header('Location: ./main.php'); ?>
    <?php endif; ?>    
    <?php else : ?>
        <?php header('Location: ./main.php'); ?>
    <?php endif; ?>    
    <?php else : ?>
        <p>
            <span class="error">Du har ikke rettigheder til at komme ind på siden.</span> Gå venligst tilbage til <a href="index.php">login siden</a>.
        </p>
    <?php endif; ?>
</body>

</html>
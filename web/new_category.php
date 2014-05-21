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
    <link rel="stylesheet" href="css/pure-web.css">
    <link rel="stylesheet" href="css/pure.css" />
    <link rel="stylesheet" href="css/pure-form.css" />
    <link rel="stylesheet" href="css/side-menu.css">
</head>

<?php if (login_check($mysqli) == true) : ?>
<?php if (check_admin($mysqli) == true) : ?>
<div id="layout">
    <a href="" id="menuLink" class="menu-link">
        <span></span>
    </a>

    <?php menu(); ?>

    <div id="main">
        <div class="header">
            <h1>Opret ny kategori</h1>
            <h2>Indtast navn på den nye kategori</h2>
        </div>

        <div class="content">
            <h2 class="content-subhead"></h2>
            
            <form class="pure-form pure-form-stacked" action="<?php echo esc_url($_SERVER['PHP_SELF']); ?>" name="registration_form">
                <div>
                    <label for="navn"><b>Navn</b></label>
                    <input id ="navn" type="text" name="navn" required />
                </div>
                <br><br>
                <input class="btn right" type="submit" value="Opret kategori"/> 

                <?php
                    if(isset($_REQUEST['navn'])) {
                        $navn = $_REQUEST['navn'];
                        $userid = $_SESSION['user_id'];
                        $date = date("y-m-d");
                            
                        if ($insert = $mysqli->prepare("INSERT INTO categories (category_name, create_date, creator)
                                                        VALUES ('$navn', '2014-05-15', $userid)")){
                                if (!$insert->execute()) {
                                    header('Location: ../error.php?err=Registration failure: INSERT');
                            }
                        echo '<META HTTP-EQUIV="Refresh" Content="0; URL=new_project.php">';
                        
                        
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
        <?php header('Location: ../main.php'); ?>
    <?php endif; ?>
    <?php else : ?>
        <p>
            <span class="error">Du har ikke rettigheder til at komme ind på siden.</span> Gå venligst tilbage til <a href="index.php">login siden</a>.
        </p>
    <?php endif; ?>

</body>

</html>
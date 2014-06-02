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
    <link rel="stylesheet" href="css/pure.css">
    <link rel="stylesheet" href="css/side-menu.css">
    <link rel="stylesheet" href="css/pure-form.css"/>
</head>

<?php if (login_check($mysqli) == true) : ?>
<?php if (0 < $_REQUEST['oid'] && 0 < $_REQUEST['nid']) { $oid = $_REQUEST['oid']; $nid = $_REQUEST['nid']; } ?>
<?php if (check_overadmin($mysqli) == true) : ?>
<?php if ($_REQUEST['nid'] > 0 && $_REQUEST['oid'] > 0) : ?>

    <div id="main">
        <div class="header">
            <h2>Bekræftelse</h2>
        </div>

        <div class="content">            
            <form>
                Er du sikker på du ønsker, at gøre brugeren med id: <?php echo $nid; ?> til den nye over administrator,
                og dermed gøre dig selv til en normal administrator?
                
                    <input type="hidden" name="oid" value="<?php echo $oid; ?>">
                    <input type="hidden" name="nid" value="<?php echo $nid; ?>">
                <div>
                	<a href="administrator.php"><input type="button" class="button" value="Nej"></a>
                </div>
                <div>
                	<input class="button" name="ja" type="submit" value="ja"> 
                </div>


            </form>
                <?php
                    if (isset($_REQUEST['ja'])) {
                        $oid = $_REQUEST['oid'];
                        $nid = $_REQUEST['nid'];
                        
                        mysqli_query($mysqli,"UPDATE users SET admin = 2    
                                              WHERE id = $nid");
                        mysqli_query($mysqli,"UPDATE users SET admin = 1    
                                              WHERE id = $oid");

                        mysqli_close($mysqli);

                        echo '<META HTTP-EQUIV="Refresh" Content="0; URL=main.php">';
                    }
                ?>
        </div>
    </div>
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


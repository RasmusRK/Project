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
<meta name="description" content="A layout example with a side menu that hides on mobile, just like the Pure website.">
    <title>Projects</title>
<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.4.2/pure.css">
<link rel="stylesheet" href="css/pure.css" />
<link rel="stylesheet" href="css/pure-form.css" />

    <!--[if lte IE 8]>
        <link rel="stylesheet" href="css/layouts/side-menu-old-ie.css">
    <![endif]-->
    <!--[if gt IE 8]><!-->
        <link rel="stylesheet" href="css/layouts/side-menu.css">
    <!--<![endif]-->
  </head>

        <?php if (login_check($mysqli) == true) : ?>
        <?php if ($_REQUEST['pid'] > 0) : ?>
            <div id="layout">
    <!-- Menu toggle -->
    <a href="" id="menuLink" class="menu-link">
        <!-- Hamburger icon -->
        <span></span>
    </a>

    <div id="menu">
        <div class="pure-menu pure-menu-open">
            <a class="pure-menu-heading" align="center" href="main.php"><img src="img/logo1.png"></a>

            <ul>
                <li><a href="all_projects.php">Tilbage</a></li>
            </ul>
        </div>
    </div>

    <div id="main">
        <div class="header">
            <h1>Tilføj tid til projekt</h1>
        </div>

        <div class="content">
            <h2 class="content-subhead"></h2>
            <p>
                <form class="pure-form pure-form-stacked" action="<?php echo esc_url($_SERVER['PHP_SELF']); ?>" method="post" name="registration_form">
                    
	                <ul>
	                <li> Indtast antal timer og dato </li>
			        </ul>

        			<div>
            			<label for="timer"><b>Timer</b></label>
            			<input id ="timer" type="text" name="timer" required />
	        		</div>
                    <br><br>
	        		<div>
                        <label for="date"><b>Dato</b></label>
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
                        if(!empty($_REQUEST['pid'])){
                            $pid = $_REQUEST['pid'];
                        }
            			
                        if(isset($_REQUEST['timer'], $_REQUEST['date'], $_REQUEST['info'])) {
                    
                    		$timer = $_REQUEST['timer'];
        					$dato = $_REQUEST['date'];
        					$info = $_REQUEST['info'];
        					$userid = $_SESSION['user_id'];
                            
                            $sql = "INSERT INTO work_on (user_id, project_id, hours, date, info) VALUES ($userid, $pid, $timer, $dato, '$info')";
                            if (!mysqli_query($sql, $mysqli)) {
                                header('Location: ../error.php?err=Registration failure: INSERT');
                            }
                            //header('Location: ./all_projects.php');
                        }
					?>
        		</form>
        </div>
    </div>
</div>

<script src="js/ui.js"></script>
</body>
        <?php else : ?>
            <meta http-equiv="refresh" content="0; url=all_projects.php" />
        <?php endif; ?>
        <?php else : ?>
            <p>
                <span class="error">Du har ikke rettigheder til at komme ind på siden.</span> Gå venligst tilbage til <a href="index.php">login siden</a>.
            </p>
        <?php endif; ?>

    </body>

</html>

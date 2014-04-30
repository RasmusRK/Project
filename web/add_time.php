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
            <div id="layout">
    <!-- Menu toggle -->
    <a href="" id="menuLink" class="menu-link">
        <!-- Hamburger icon -->
        <span></span>
    </a>

    <div id="menu">
        <div class="pure-menu pure-menu-open">
            <a class="pure-menu-heading" align="center" href="main.php"><img src="logo1.png"></a>

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
                <form class="boxCont" action="<?php echo esc_url($_SERVER['PHP_SELF']); ?>" method="post" name="registration_form">
	                <ul>
	                <li> Indtast antal timer og dato </li>
			        </ul>

        			<div>
            			<label for="timer">Timer</label>
            			<input id ="timer" type="text" name="timer" required />
	        		</div>

	        		<div>
    	        		<label for="dato">Dato</label>
        	    		<input id ="dato" type="text" name="dato" required />
        			</div>

        			<div>
        				<label for="info">Beskrivelse</label>
        				<input id ="info" type="text" name="info" required/>
        			</div>

        			<div>
        			<br>
        			<input class="submit" type="submit" value="submit"/> 
        			</div>

        			<?php
            			if(isset($_REQUEST['timer'], $_REQUEST['dato'], $_REQUEST['info'])) {
                    
                    		$timer = $_REQUEST['timer'];
        					$dato = $_REQUEST['dato'];
        					$info = $_REQUEST['info'];
        					$userid = $_SESSION['user_id'];
                            
                            if(!empty($_REQUEST['pid'])){
                                $pid = $_REQUEST['pid'];
                            }

                 if ($insert_stmt = $mysqli->prepare("INSERT INTO work_on (user_id, projekt_id, hours, date, info) VALUES ($userid, $pid, $timer, $dato,'$info')")) {
                $insert_stmt->bind_param($userid, $pid, $timer, $dato,$info);
                // Execute the prepared query.
                      if (! $insert_stmt->execute()) {
                    header('Location: ../error.php?err=Registration failure: INSERT');
                       }
                     }
                     header('Location: ./all_projects.php');

    				
                            }
    					





					?>
        		</form>
        </div>
    </div>
</div>

<script src="js/ui.js"></script>
</body>
        <?php else : ?>
            <p>
                <span class="error">You are not authorized to access this page.</span> Please <a href="index.php">login</a>.
            </p>
        <?php endif; ?>

    </body>

</html>

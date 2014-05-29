<?php
include_once 'includes/db_connect.php';
include_once 'includes/functions.php';
sec_session_start();
if (login_check($mysqli) == true) {
    $logged = 'in';
    header('location:main.php');
    die();
} else {
    $logged = 'out';
}
?>

<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Projekt</title>
<link rel="stylesheet" type="text/css" href="css/login/reset.css">
<link rel="stylesheet" type="text/css" href="css/login/structure.css">
</head>

<body>

<?php
    if (isset($_GET['error'])) {
	    echo '<p class="error">Error Logging In!</p>';
       checkbrute($user_id, $mysqli);
    }
?> 

<form class="box login" action="includes/process_login.php" method="post">
	<fieldset class="boxBody">
	  <label>Flyklub id</label>
	  <input id="userid" name="userid" type="text" tabindex="1" placeholder="Indtast brugernavn" required>
	  <label>Kodeord</label>
	  <input id="password" name="password" type="password" tabindex="2" placeholder="Indtast kodeord" required>
	</fieldset>
	<footer>
	  <!--<label><a href="" tabindex="3">Opret ny bruger</label>-->
	  <a href="register.php"><input type="submit" class="btn-newuser" value="Opret ny bruger" /></a>
	  <input type="submit" class="btn-login" value="Login" tabindex="4" onclick="formhash(this.form, this.form.password);" />
	</footer>
</form>
<footer id="main"></footer>

<script type="text/JavaScript" src="js/sha512.js"></script> 
<script type="text/JavaScript" src="js/forms.js"></script> 

</body>
</html>

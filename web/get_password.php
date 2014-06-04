<?php
include_once 'includes/update.inc.php';
include_once 'includes/functions.php';
include_once 'includes/psl-config.php';
include_once 'includes/db_connect.php';
sec_session_start();
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="A layout example with a side menu that hides on mobile, just like the Pure website.">
	<title>Projects</title>
	<link rel="stylesheet" href="css/pure-web.css">
	<link rel="stylesheet" href="css/pure.css"/>
	<link rel="stylesheet" href="css/pure-form.css"/>
	<link rel="stylesheet" href="css/side-menu.css">
</head>


<body>
	<div>
		<?php if (login_check($mysqli) == true) : ?>
			<?php if (0 < $_REQUEST['uid']) { $uid = $_REQUEST['uid']; } ?>
			<?php if (check_overadmin($mysqli) == true) : ?>
				<?php if ($_REQUEST['uid'] > 0) : ?>

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
									<li> <a href ='sql_table_to_pdf/generate-pdf.php'> Print </a></li>
								<?php endif; ?>
								<?php if (check_overadmin($mysqli) == true) : ?>
									<li> <a href='administrator.php'>Administrator</a></li>
								<?php endif; ?>
								<li><a class='logout' href='includes/logout.php'>Log ud</a></li>
							</ul>
						</div>
					</div>


					<div id="main">
						<div class="header">
							<h1>Gendan password</h1>
							<h2>Her kan du gendanne password på den valgte bruger</h2>
						</div>


						<div class="content">
							<h2 class="content-subhead"></h2>

							<form class="pure-form pure-form-stacked" method="POST" action="<?php echo $_SERVER["PHP_SELF"];?>">


								<form action="<?php echo esc_url($_SERVER['PHP_SELF']); ?>" method="post" name="registration_form">
									<input type="hidden" name="uid" value="<?php echo $uid; ?>">
									Indtast det nye password<br>
									Passwords skal være mindst 6 tegn langt<br>
									Passwords må indeholde følgende<br>
									Mindst et stort bogstav (A..Z)<br>
									Mindst et lille bogstav (a..z)<br>
									Mindst et nummer (0..9)<br><br>

									<div>
									<label for="password"><b>Password</b></label>
										<input id ="password" type="password" name="password" /><br>
									</div>

									<div>
									<a href="administrator.php"><input class="btn left" type="button" value="Tilbage"/></a>
									<input class="btn right" type="button" value="Gendan" onclick="return formhash(this.form,
																					   							   this.form.password);" /> 
									</div>
								</form>
						</div>

<script src="js/ui.js"></script>

							
<?php else : ?>
<?php header('Location: ./main.php'); ?>
<?php endif; ?>    
<?php else : ?>
<?php header('Location: ./main.php'); ?>
<?php endif; ?>    
<?php else : ?>
<p><span class="error">Du har ikke rettigheder til at komme ind på siden.</span> Gå venligst tilbage til <a href="index.php">login siden</a>.</p>
<?php endif; ?>
</body>
</html>
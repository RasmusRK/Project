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
    <title>Projects</title>
    <link href="http://bootswatch.com/cosmo/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
</head>

<body>
    <?php if (login_check($mysqli) == true) : ?>
<div class="navbar navbar-default">
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="main.php">EKGL</a>
  </div>
  <div class="navbar-collapse collapse navbar-responsive-collapse">
    <ul class="nav navbar-nav">
      <li class="active"><a href="my_projects.php">Mine projekter</a></li>
      <li><a href="all_projects.php">Alle projekter</a></li>
      <li><a href="history.php">Min historik</a></li>
      <li><a href="contact.php">Kontakt</a></li>
      <li><a href="new_project.php">Nyt projekt</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
          <li class="dropdown">
          <a class="dropdown-toggle" role="button" data-toggle="dropdown" href="#">
            <i class="glyphicon glyphicon-user"></i> Admin <span class="caret"></span></a>
          <ul id="g-account-menu" class="dropdown-menu" role="menu">
            <li><a href="#">My Profile</a></li>
            <li><a href="#"><i class="glyphicon glyphicon-lock"></i> Logout</a></li>
          </ul>
        </li>
    </ul>
  </div>
</div>

        <div id="main">
            <div class="header">
                <h2>&nbsp;Alle projekter</h2>
                <h3>&nbsp;Liste over alle projekter</h3><hr>
            </div>

            <div class="content">
                <h2 class="content-subhead"></h2>
                <p> <?php show_projects($mysqli); ?> </p>
            </div>
        </div>
    </div>

    <script src="js/ui.js"></script>
        <?php else : ?>
            <p>
                <span class="error">Du har ikke rettigheder til at komme ind på siden.</span> Gå venligst tilbage til <a href="index.php">login siden</a>.
            </p>
        <?php endif; ?>
</body>

</html>

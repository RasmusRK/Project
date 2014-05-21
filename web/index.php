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

<!DOCTYPE html>
<html>
<head>
    <title>Project</title>
    <link rel="stylesheet" href="css/pure.css" />
    <script type="text/JavaScript" src="js/sha512.js"></script> 
    <script type="text/JavaScript" src="js/forms.js"></script> 
</head>

<body background="img/bg.jpg">
    <div id = "login">
        <?php
        if (isset($_GET['error'])) {
            echo '<p class="error">Error Logging In!</p>';
            checkbrute($user_id, $mysqli);
        }
        ?> 
        <form class = "boxCont" action="includes/process_login.php" method="post" name="login_form">                      
            <div>
                <label for="userid">Flyklub id</label>
                <input id ="userid" type="text" name="userid" placeholder="Indtast flyklub id"/>
            </div>
            <div>
               <label for="password">Kodeord</label>
               <input type="password" name="password" id="password" placeholder="Indtast kodeord"/>
           </div>

           <input class="btn left" type="submit" value="Login" onclick="formhash(this.form, this.form.password);" /> 
           <a href="register.php"><input class="btn right" type="button" value="Opret bruger" /></a>
    </div>

</body>
</html>
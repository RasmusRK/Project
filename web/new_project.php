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
    <link rel="stylesheet" href="css/pure-web.css">
    <link rel="stylesheet" href="css/pure.css"/>
    <link rel="stylesheet" href="css/pure-form.css"/>
    <link rel="stylesheet" href="css/side-menu.css"/>
</head>

<?php if (login_check($mysqli) == true) : ?>
<?php if (check_admin($mysqli) == true) : ?>
    
    <div id="layout">
        <a href="#menu" id="menuLink" class="menu-link">
            <span></span>
        </a>

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
                    <?php endif; ?>
                    <?php if (check_overadmin($mysqli) == true) : ?>
                    <li> <a href='administrator.php'>Administrator</a></li>
                    <li> <a href ='sql_table_to_pdf/generate-pdf.php'> Print </a></li>
                    <?php endif; ?>
                    <li><a class='logout' href='includes/logout.php'>Log ud</a></li>
                </ul>
            </div>
        </div>

        <div id="main">
            <div class="header">
                <h1>Opret nyt projekt</h1>
                <h2>Udfyld følgende for oprette et nyt projekt</h2>
            </div>
            <div class="content">
                <h2 class="content-subhead"></h2>
            
                <form class="pure-form pure-form-stacked" method="POST" action="<?php echo $_SERVER["PHP_SELF"];?>">
                <fieldset>
                <div>
                    <label for="projectname"><b>Projekt navn</b></label>
                    <input id ="projectname" type="text" name="projectname" required />
                </div>
                    <br><br>
                    <div>
                        <label for="category"><b>Kategori</b></label>
                            <?php chooseCategory($mysqli); ?>
                        <br><br>
                        <a href="new_category.php">Tilføj ny kategori</a>
                    </div>
                    <div>
                        <label for="info"><b>Beskrivelse</b></label>
                        <textarea id="info" type="text" name="info" rows="4" cols="50"></textarea>
                    </div>
                    <br><br><br><br><br>
                    <input class="btn right" type="submit" value="Tilføj projekt"> 
                </fieldset>

<?php
                ob_start();         
                if(isset($_REQUEST['projectname'], $_REQUEST['info'])) {
                    
                    $projectname = $_REQUEST['projectname'];
                    $category    = $_REQUEST['category'];
                    $date        = date("Y-m-d");
                    $info        = $_REQUEST['info'];
                    $userid      = $_SESSION['user_id'];

                    if ($insert = $mysqli->prepare("INSERT INTO projekt (creator_id, project_name, category, start_date, info) 
                                                         VALUES ($userid, '$projectname', '$category', '$date', '$info')")) {
                                
                                if (!$insert->execute()) {
                                    header('Location: ../error.php?err=Registration failure: INSERT'); 
                            }
                         echo '<META HTTP-EQUIV="Refresh" Content="0; URL=all_projects.php">';
                        
                        }
                    } 
            ob_end_flush();
            ?>
            </form>
        </div>
    </div>
</div>

<script src="js/ui.js"></script>
</body>
    <?php else : ?>
        <?php header('Location: ./main.php'); ?>
    <?php endif ; ?>
    <?php else : ?>
        <p>
            <span class="error">Du har ikke rettigheder til at komme ind på siden.</span> Gå venligst tilbage til <a href="index.php">login siden</a>.
        </p>
    <?php endif; ?>
</body>

</html>

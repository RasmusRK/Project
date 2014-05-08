<?php
/*  NOTER:
I php svarer ' til " i SQL. Ingenting svarer til ´ i SQL.
*/

mysql_connect("mysqlsuper1.webhosting.dk","mysqluser17282","apvhxfhk");
mysql_select_db("mysqluser17282");

$year = $_POST["year"];
$month = $_POST["month"];
$date = $_POST["date"];
$time = $_POST["time"];
$info = $_POST["info"];
$email = $_POST["email"];
$bookedTime = $_POST["bookedTime"];

// Sender email til personen som ikke længere er passager.
$to = $email;
$subject = "Annuleret flyvetid.";

//midlertidige:
$maaned = 1 + $month;
$tidspunkt = 7 + $bookedTime;

$body = "\nDesværre er Deres flyvetid d. " . $date . "/" . $maaned . "/" . $year . " kl. " . $tidspunkt . ":00 blevet annuleret af instruktøren.\n\n\nMed venlig hilsen Flyveklubben.\n\nDette er en automatisk besked, besvar venligst ikke.";
mail($to, $subject, $body);


$query = "
	UPDATE booking_OYXVC
	SET ". $time ." = '". $info ."'
	WHERE year = ". $year ." AND month = ". $month ." AND date = ". $date .";
	";
	$qr = mysql_query($query);

?>
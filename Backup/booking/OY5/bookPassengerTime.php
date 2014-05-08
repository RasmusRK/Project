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
$pilot = $_POST["pilot"];
$email = $_POST["email"];
$user = $_POST["pilotUser"];

$query = "
	SELECT ". $time ." FROM booking_OY5
	WHERE year = ". $year ." AND month = ". $month ." AND date = ". $date .";
";

$qr = mysql_query($query);
$row = mysql_fetch_array($qr);

//$info = $row[0] . "\n" . $pilot . "\n" + $email;

$query = "
		UPDATE booking_OY5
		SET ". $time ." = '". $row[0] . "\n" . $pilot . "\n" . $email . "\n" . $user . "'
		WHERE year = ". $year ." AND month = ". $month ." AND date = ". $date .";
	";
$qr = mysql_query($query);
?>

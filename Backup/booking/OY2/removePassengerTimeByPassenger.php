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

$query = "
	UPDATE booking_OY2
	SET ". $time ." = '". $info ."'
	WHERE year = ". $year ." AND month = ". $month ." AND date = ". $date .";
	";
	$qr = mysql_query($query);

?>

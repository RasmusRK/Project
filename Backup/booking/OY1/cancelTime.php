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

$query = "
	UPDATE booking_OY1
		SET ". $time ." = ''
		WHERE year = ". $year ." AND month = ". $month ." AND date = ". $date .";"
;

$qr = mysql_query($query);
?>

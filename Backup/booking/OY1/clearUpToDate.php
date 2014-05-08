<?php
/*  NOTER:
I php svarer ' til " i SQL. Ingenting svarer til ´ i SQL.
*/

mysql_connect("mysqlsuper1.webhosting.dk","mysqluser17282","apvhxfhk");
mysql_select_db("mysqluser17282");

$year = $_POST["year"];
$month = $_POST["month"];
$date = $_POST["date"];
/*
$query = "
	SELECT username, name FROM users
	WHERE username = ". $user ." AND name = ". $name .";
";
*/

$query = "
	DELETE FROM booking_OY1 
	WHERE year < " . $year ." 
	OR ( year = " . $year ." AND month < " . $month ." )
	OR ( year = " . $year ." AND month = " . $month ." AND date < " . $date ." );
";

$qr = mysql_query($query);
//$row = mysql_fetch_array($qr);

$send = "success=true";
echo $send."&";
?>

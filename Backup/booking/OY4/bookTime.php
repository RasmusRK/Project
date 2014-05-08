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

$send = "succes=true";


$query = "
	SELECT year, ". $time ." FROM booking_OY4
	WHERE year = ". $year ." AND month = ". $month ." AND date = ". $date .";
";

$qr = mysql_query($query);
$row = mysql_fetch_array($qr);


// Hvis datoen ikke er oprettet (year er tom):
if (strcmp($row[0], "")==0) {
	// Ny dato oprettes og bookede tid indsættes.
	$query = "
		INSERT INTO booking_OY4(year, month, date, ". $time .")
		VALUES (". $year .",". $month .",". $date .",'". $info ."');
	";
	$qr = mysql_query($query);
}
// Ellers er datoen oprettet, og hvis tiden ikke er besat (tiden er tom):
else if (strcmp($row[1], "")==0){
	$query = "
		UPDATE booking_OY4
		SET ". $time ." = '". $info ."'
		WHERE year = ". $year ." AND month = ". $month ." AND date = ". $date .";
	";
	$qr = mysql_query($query);
}
// Ellers er datoen oprettet men tiden er besat:
else {
	$send = "succes=false";
}

echo $send."&";
?>

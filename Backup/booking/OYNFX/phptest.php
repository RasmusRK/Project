<?php
/*  NOTER:
I php svarer ' til " i SQL. Ingenting svarer til ´ i SQL.
*/


mysql_connect("mysqlsuper1.webhosting.dk","mysqluser17282","apvhxfhk");
mysql_select_db("mysqluser17282");

$year = 2008; #$_POST["year"];
$month = 5; #$_POST["month"];
$date = 8; #$_POST["date"];

$query = "
	SELECT time1,time2,time3,time4,time5,time6,time7,time8,time9,time10,time11,time12,time13,time14 FROM booking_OYNFX
	WHERE year = ". $year ." AND month = ". $month ." AND date = ". $date .";
";

#$result = mysql_query($query) or die(mysql_error() . '<br />'. $query);
#while($row = mysql_fetch_array($result)){
# var_dump($row);
#}
$qr = mysql_query($query);
$row = mysql_fetch_array($qr);

$send = "times=". $row[0] ."|". $row[1] ."|". $row[2] ."|". $row[3] ."|". $row[4] ."|". $row[5] ."|". $row[6] ."|". $row[7] ."|". $row[8] ."|". $row[9] ."|". $row[10] ."|". $row[11] ."|". $row[12] ."|". $row[13];

echo $send;
?>
<?php
/*  NOTER:
I php svarer ' til " i SQL. Ingenting svarer til ´ i SQL.
*/

mysql_connect("mysqlsuper1.webhosting.dk","mysqluser17282","apvhxfhk");
mysql_select_db("mysqluser17282");

$query = "
	SELECT tekst FROM bookingText_OYXVC
	WHERE ID = 1;
";

$qr = mysql_query($query);
$row = mysql_fetch_array($qr);

$send = "infoText=" . $row[0];

echo $send."&";
?>
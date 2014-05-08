<?php
/*  NOTER:
I php svarer ' til " i SQL. Ingenting svarer til ´ i SQL.
*/

mysql_connect("mysqlsuper1.webhosting.dk","mysqluser17282","apvhxfhk");
mysql_select_db("mysqluser17282");

$text = $_POST["infoText"];

$query = "
		UPDATE bookingText_OY4
		SET tekst = '". $text ."'
		WHERE ID = 1;
		";
$qr = mysql_query($query);
?>

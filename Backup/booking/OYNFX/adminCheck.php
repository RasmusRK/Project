<?php
/*  NOTER:
I php svarer ' til " i SQL. Ingenting svarer til ´ i SQL.
*/

mysql_connect("mysqlsuper1.webhosting.dk","mysqluser17282","apvhxfhk");
mysql_select_db("mysqluser17282");

$user = $_POST["user"];
$pass = $_POST["pass"];

$query = "
	SELECT accessID FROM users
	WHERE username = '". $user ."' AND password = '". $pass ."';
";

$qr = mysql_query($query);
$row = mysql_fetch_array($qr);

$send = "accessID=" . $row[0];

echo $send."&";
?>
<?php
/*  NOTER:
I php svarer ' til " i SQL. Ingenting svarer til ´ i SQL.
*/

mysql_connect("mysqlsuper1.webhosting.dk","mysqluser17282","apvhxfhk");
mysql_select_db("mysqluser17282");

$user = $_POST["user"];

/*
$query = "
	SELECT username, name FROM users
	WHERE username = ". $user ." AND name = ". $name .";
";
*/

$query = "
	SELECT username FROM users
	WHERE username = '". $user ."';
";

$qr = mysql_query($query);
$row = mysql_fetch_array($qr);

// Hvis usernamet findes:
if (strcmp($row[0], $user)==0) {
	// Ny dato oprettes og bookede tid indsættes.
	$query = "
		DELETE FROM users WHERE username = '" . $user ."';
	";
	$qr = mysql_query($query);
	$send = "success=true";
}
// Ellers hvis usernamet ikke findes:
else if (strcmp($row[0], "")==0) {
	$send = "success=false";
}

echo $send."&";
?>
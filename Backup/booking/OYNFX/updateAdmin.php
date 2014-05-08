<?php
/*  NOTER:
I php svarer ' til " i SQL. Ingenting svarer til ´ i SQL.
*/

mysql_connect("mysqlsuper1.webhosting.dk","mysqluser17282","apvhxfhk");
mysql_select_db("mysqluser17282");

$adminUser = $_POST["adminUser"];
$adminPass = $_POST["adminPass"];
$newAdminUser = $_POST["newAdminUser"];
$newAdminPass = $_POST["newAdminPass"];

$query = "
	SELECT username, password FROM users
	WHERE accessID = 0;
";

$qr = mysql_query($query);
$row = mysql_fetch_array($qr);

if ( strcmp($row[0], $adminUser)==0 && strcmp($row[1], $adminPass)==0) {
	$query = "
		UPDATE users
		SET username = '" . $newAdminUser . "', password = '". $newAdminPass ."' 
		WHERE accessID = 0;
		";
	$qr = mysql_query($query);
	$send = "success=true";
}
else {
	$send = "success=false";
}

echo $send."&";
?>
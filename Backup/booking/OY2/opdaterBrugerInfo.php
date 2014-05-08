<?php
/*  NOTER:
I php svarer ' til " i SQL. Ingenting svarer til ´ i SQL.
*/

mysql_connect("mysqlsuper1.webhosting.dk","mysqluser17282","apvhxfhk");
mysql_select_db("mysqluser17282");

$user = $_POST["user"];
$pass = $_POST["pass"];
$name = $_POST["name"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$accessID = $_POST["accessID"];


$query = "
	SELECT username FROM users
	WHERE username = '". $user ."';
";

$qr = mysql_query($query);
$row = mysql_fetch_array($qr);

// Hvis usernamet findes:
if (strcmp($row[0], $user)==0) {
	
	$query = "
		UPDATE users
		SET password = '". $pass ."', name = '" . $name . "', email = '" . $email . "', phone = '" . $phone . "', accessID = " . $accessID ." 
		WHERE username = '". $user ."';
		";
	$qr = mysql_query($query);
	$send = "success=true";
}
// Ellers findes username allerede:
else if (strcmp($row[0], "")==0) {
	$send = "success=false";
}

echo $send."&";
?>
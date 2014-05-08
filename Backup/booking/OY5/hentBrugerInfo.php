<?php


mysql_connect("mysqlsuper1.webhosting.dk","mysqluser17282","apvhxfhk");
mysql_select_db("mysqluser17282");

$user = $_POST["user"];

$query = "SELECT * FROM users WHERE username = '" . $_POST["user"]  . "'";

$qr = mysql_query($query);

$row = mysql_fetch_array($qr);

if (strcmp($row[0], $user)==0) {
	$send = 
	"loginCorrect=true&" . "user=" . $row[0] . "&" 
	. "pass=" . $row[1] . "&" 
	. "name=" . $row[2] . "&" 
	. "email=" . $row[3] . "&" 
	. "phone=" . $row[4] . "&"
	. "accessID=" . $row[5];
}
else {
	$send = "loginCorrect=false";
}

echo $send."&";
?>
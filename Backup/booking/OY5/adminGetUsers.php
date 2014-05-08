<?php

mysql_connect("mysqlsuper1.webhosting.dk","mysqluser17282","apvhxfhk");
mysql_select_db("mysqluser17282");

$query = "SELECT username FROM users WHERE accessID > 0";

$qr = mysql_query($query);

$send = "userList=";

$row = mysql_fetch_array($qr); 
$foo = 1;

while ( $foo ) {
	$user = $row[0];
	if ($row = mysql_fetch_array($qr)) {
		$send .= $user . "|";
	}
	else {
		$send .= $user;
		$foo = 0;
	}
}

echo $send."&";
?>
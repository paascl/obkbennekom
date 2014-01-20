<?php

$dbname = "a9776493_obk";
$username = "a9776493_obk";
$password = "K13rk@mp36";
$hostname = "mysql11.000webhost.com"; 

//connection to the database
$conn = mysql_connect($hostname, $username, $password) or die(mysql_error);
mysql_select_db($dbname) or die(mysql_error);

?>
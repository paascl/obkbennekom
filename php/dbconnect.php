<?php

$dbname = "obkbennekom";
$username = "root";
$password = "K13rk@mp36";
$hostname = "localhost"; 

//connection to the database
$conn = mysql_connect($hostname, $username, $password) or die(mysql_error);
mysql_select_db($dbname) or die(mysql_error);

?>
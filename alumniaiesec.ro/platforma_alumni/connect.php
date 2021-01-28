<?php
$host="localhost";
$user="root";
$pass="";
$db="test";
$bazadedate = mysql_connect($host,$user,$pass) OR die("eroare la SBD");
mysql_select_db($db) OR die("nu am gasit BD");

?>

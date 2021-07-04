<?php
include "connect.php";
$nume=$_POST['nume'];

$sql1 = "INSERT INTO `autor` (`NUME`) VALUES ('$nume')";
$resolve=mysql_query($sql1);
if($resolve)
header("location:adaugare_cart.php");
else
echo "teapa, nu merge";

?>
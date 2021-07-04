<?php
include "connect.php";
$editura=$_POST['Editura'];
$sql1 = "INSERT INTO `editura`(`NUME_ED`) VALUES ('$editura')";
$resolve=mysql_query($sql1);
if($resolve)
header("location:adaugare_cart.php");
else
echo "teapa, nu merge";

?>
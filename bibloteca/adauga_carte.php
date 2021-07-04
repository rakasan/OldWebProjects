<?php
include "connect.php";
$autor=$_POST["autor"];
$nume=$_POST["Carte"];
$editura=$_POST["editura"];
$an=$_POST["an"];
//echo "$autor"." "."$nume"." "."$editura"." "."$an";
$sql1="INSERT INTO `bibleoteca`.`carte` (`ID_CARTE`, `ID_AUTOR`, `ID_EDITURA`, `TITLU`, `AN_APARITIE`) VALUES ('$nume', '$autor', '$editura', '$nume', '$an');";
$result=mysql_query($sql1);
if($result)
header("location:admin.php");
else
{
echo "nu a mers";
header("location:adauga_cart.php");
}
?>
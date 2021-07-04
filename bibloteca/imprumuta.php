<?php
include "connect.php";
session_start();
$user=$_SESSION['user'];
$sql="SELECT id FROM login WHERE user LIKE '$user'";
$result=mysql_query($sql);
$row=mysql_fetch_array($result);
$id_user=$row['id'];
$id_carte=$_GET['id'];
$sql="INSERT INTO  `imprumut` (
`ID_USER` ,
`ID_CARTE1`
)
VALUES (
'$id_user',  '$id_carte'
);";
$result=mysql_query($sql);
echo "$id_carte "." "."$id_user";
if($result)
header("location:cauta.php");
else
echo "nu a mers imprumutarea";
?>
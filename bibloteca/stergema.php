<?php
include "connect.php";
$cod=$_GET['id'];
$sql="DELETE FROM carte WHERE ID_CARTE=$cod";
$result=mysql_query($sql)or die(mysql_error());
if($result)
header("location:admin.php?sters=$cod");

?>
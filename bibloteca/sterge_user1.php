<?php
include "connect.php";
$id=$_GET['id'];
$sql="DELETE FROM loseri WHERE ID='$id'";
$result=mysql_query($sql)or mysql_error();
$sql="DELETE FROM login WHERE id='$id'";
$result=mysql_query($sql) or mysql_error();
if($result)
header("location:admin.php?sters=$id");
else
echo "nu s-a sters";
?>
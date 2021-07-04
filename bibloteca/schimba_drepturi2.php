<?php
$tip=$_GET['id'];
$id=$_GET['var'];
$sql="UPDATE `login` SET  `type` =  '$tip' WHERE `id`=`$id`";
header("location:schimba_drepturi.php");



?>
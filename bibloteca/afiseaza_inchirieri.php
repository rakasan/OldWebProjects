<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Bibleoteca Virtuala</title>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>

<body>
<div id="wrapper">
<div id="head"></div>
<div id="left-column">
<div id="navbar">
<?php
session_start();
$tip=$_SESSION["tip"];
switch($tip)
{
 	case 2:	echo" <li><a href=\"user.php\"><span>User</span></a></li>
		  <li><a href=\"Noutati.php\"><span>Noutati</span></a></li>
		  <li><a href=\"Cauta.php\"><span>Cauta</span></a></li>
		  <li><a href=\"Contact.php\"><span>Contact</span></a></li>
          <li><a href=\"http://csac.ulbsibiu.ro\"><span>ULBS</span></a></li>
		  <li><a href=\"delogare.php\"><span>Delogare</span></a></li>";break;
		  
		  
 	case 1:	echo" <li><a href=\"admin.php\"><span>Admin</span></a></li>
		  <li><a href=\"Noutati.php\"><span>Noutati</span></a></li>
		  <li><a href=\"Cauta.php\"><span>Cauta</span></a></li>
		  <li><a href=\"Contact.php\"><span>Contact</span></a></li>
          <li><a href=\"http://csac.ulbsibiu.ro\"><span>ULBS</span></a></li>
		  <li><a href=\"delogare.php\"><span>Delogare</span></a></li>";break;
}
?>		
		
	</div>
    </div>
<div id="right-column">
<h2>Bine ati venit</h2>
<p>Bun venit la una dintre bibleotecile online. Din pacate este inca in lucru asa ca va rugam sa aveti rabdare pana are sa fie finalizata</p>
<?php
include "connect.php";
include "functi.php";

verifica();
$user=$_SESSION['user'];
echo "Bun venit, stapane $user";
$sql="SELECT * FROM imprumut";
$result=mysql_query($sql);
echo "<table>";
echo "<tr><td>Titlul cartii </td><td> Numele, user</td></tr>";
while($row=mysql_fetch_array($result))
{
	$id_user=$row['ID_USER'];
	$id_carte=$row['ID_CARTE1'];
	//echo $id_user." ".$id_user;
	$sql="SELECT * FROM carte WHERE ID_CARTE='$id_carte'";
	$result1=mysql_query($sql);
		$row1=mysql_fetch_array($result1);
			$user=returnUser($id_user);
			echo "<tr><td>".$row1['TITLU']."</td><td>".$user."</td></tr>";
	}
	echo "</table>";
?>


<p>&nbsp;</p>


</div> 
<div id="footer"></div>   
   
</div>
</body>
</html>

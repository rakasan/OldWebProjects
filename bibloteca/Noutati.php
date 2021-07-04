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
<?php
include "functi.php";
include "connect.php";

$user=$_SESSION['user'];
verifica();
echo "Bun venit, $user";

	echo "<table><tr><td>NR.Crt</td><td>Titlu</td><td>editura</td><td>autor</td><td>";
 $sql=" SELECT * FROM carte  ORDER BY ID_CARTE DESC LIMIT 0,4";
 $result=mysql_query($sql);
 $i=0;
 while($row=mysql_fetch_array($result))
  {
	$editura=returnEditura($row['ID_EDITURA']);
	$autor=returnAutor($row['ID_AUTOR']);  
	 echo "<tr><td>".$i."</td><td>".$row['TITLU']."</td><td>".$editura."</td><td>".$autor."</td></tr>"; 
	 $i++;
	  }
echo "</table>"
?>

</div> 
<div id="footer">
Copyright Racasan Vlad
</div>   
   
</div>
</body>
</html>

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
<ul>
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
		</ul>
	</div>
    </div>
<div id="right-column">
<?php
include "functi.php";
$user=$_SESSION['user'];
verifica();
echo "Bun venit, $user";
?>
<h2>Bine ati venit</h2>
<p>Bun venit la una dintre bibleotecile online. Din pacate este inca in lucru asa ca va rugam sa aveti rabdare pana are sa fie finalizata</p>


</div> 
<div id="footer">
Copyright Racasan Vlad
</div>   
   
</div>
</body>
</html>

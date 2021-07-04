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
 		 <li><a href="index.php"><span>Conectare</span></a></li>
		  
		  
		</ul>
	</div>
    </div>
<div id="right-column">
<?php
include "connect.php";
include "functi.php";
initializare();

?>
<h2>Bine ati venit</h2>
<p>Bun venit la una dintre bibleotecile online. Din pacate este inca in lucru asa ca va rugam sa aveti rabdare pana are sa fie finalizata</p>
<form method="post" action="autentificare.php">
<table>
<tr><td> User: </td><td><input type="text" name="user" /></td></tr>
<tr><td>Password </td><td><input type="password" name="pass" /></td></tr>
<tr><td><input type="submit" name="Enter" value="Logheaza" /></td><td><input type="reset" value="reset"/></td> </tr>
</table>
</form>

<form method="post" action="signup.php" >

<input type="submit" name="inregistrare" value="Inregistreazate"/>
</form>

</div> 
<div id="footer"></div>   
   
</div>
</body>
</html>

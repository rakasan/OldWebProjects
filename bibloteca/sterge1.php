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
$user=$_SESSION['user'];
echo "Bun venit, $user";
?>
<h2>Bine ati venit</h2>
<p>Bun venit la una dintre bibleotecile online. Din pacate este inca in lucru asa ca va rugam sa aveti rabdare pana are sa fie finalizata</p>
<?php
include "connect.php";
include "functi.php"; 
//print_r($_POST);
$Autor=0;
$Titlu=0;
$Editura=0;
$Tot=0;
/*if(isset($_POST['Cautare']));{
	$selectedradio=$_POST['cauta1'];
	if($selectedradio=='autor')
		$Autor=1;
	if($selectedradio=='titlu')
		$Titlu=1;
	if($selectedradio=='editura')
		$Editura=1;
	if($selectedradio=='tot')
		$Tot=1;
}
*/
$cauta=$_POST["cauta"];
if($Autor==1){
	echo "<table>";
	$expand=explode(" ",$cauta);
	$numar=str_word_count($cauta);
	$i=1;
	for($j=0;$j<=$numar;$j++)
		if($i==1){
		$sql1="SELECT * FROM autor WHERE NUME LIKE'$expand[$j]' OR PRENUME LIKE '$expand[$j]' OR PRENUME2 LIKE'$expand[$j]'";
			$result=mysql_query($sql1);
	
	while($row=mysql_fetch_array($result))
	{
		$id=$row['COD'];
		$sql2="SELECT * FROM carte WHERE ID_AUTOR=$id";
		$result1=mysql_query($sql2);
				while($row1=mysql_fetch_array($result1))
			{
				$e=returnEditura($row1['ID_EDITURA']);
				echo "<tr><td>".$i."</td><td>".$row1['NUME']."</td><td>".returnAutor($id)."</td><td>".$e."</td><td>".$row1['AN_APARITIE']."</td><td>".$row1['ID_CARTE']."</td><td><a href=\"stergema?id=$cod.php\"> Sterge</a></td></tr>";
$i++;
				}
	}
		}
echo "</table>"	;	

}
if($Titlu==1){
	$cauta="%".$cauta."%";
$sql="SELECT * FROM carte WHERE TITLU LIKE '$cauta'";
$result=mysql_query($sql);
$i=1;
while($row=mysql_fetch_array($result))
{	$cod=$row['COD'];
	$autor=returnAutor($row['ID_AUTOR']);
	$editura=returnEditura($row['ID_EDITURA']);
	echo "<tr><td>".$i." "."</td><td>".$row['TITLU']." "."</td><td>".$autor." "."</td><td>".$editura." "."</td><td>".$row['AN_APARITIE']."</td><td><a href=\"stergema.php?id=$cod\"> Sterge</a></td></tr>";
$i++;
	}
}
if($Editura==1)
{$sql1="SELECT * FROM editura WHERE NUME LIKE'$cauta'";
$result=mysql_query($sql1);
$row=mysql_fetch_array($result);
	$cod_editura=$row['ID_EDITURA'];
	$sql="SELECT * FROM carte WHERE ID_EDITURA LIKE '$cod_editura'";	
	$result1=mysql_query($sql);
	
	$i=1;
	while($row=mysql_fetch_array($result1))
	{	$autor=returnAutor($row['ID_AUTOR']);
		$editura=returnEditura($cod_editura);
		echo "<tr><td>".$i." "."</td><td>".$row['TITLU']." "."</td><td>".$autor." "."</td><td>".$editura." "."</td><td>".$row['AN_APARITIE']."</td><td><a href=\"stergema.php?id=$cod\"> Sterge</a></td></tr>";
$i++;		}
}

	
?>

</div> 
<div id="footer">

Copyright Racasan Vlad
</div>   
   
</div>
</body>
</html>

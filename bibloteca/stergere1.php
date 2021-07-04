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
$autor=mysql_real_escape_string(stripslashes($_POST['Autor']));
$editura=mysql_real_escape_string(stripslashes($_POST['Editura']));
$titlu=mysql_real_escape_string(stripslashes($_POST['Titlu']));
echo "<table><tr><td>Nr.Crt</td><td>Autor</td><td>Titlu</td><td>Editura</td></tr>";
if((!empty($titlu))&&(!empty($autor))&&(!empty($editura))){
	$sql="SELECT * FROM carte,editura,autor WHERE carte.TITLU LIKE '%$titlu%' AND autor.NUME LIKE '%$autor%' AND editura.NUME_ED LIKE '%$editura%' ORDER BY carte.ID_CARTE ASC";
				$result=mysql_query($sql);
			$i=0;
			while($row=mysql_fetch_array($result))
			{	$cod=$row['ID_CARTE'];
				$editura=$row['NUME_ED'];
				$autor=$row['NUME'];
				$titlu=$row['TITLU'];
				echo "<tr><td>".$i."</td><td>".$autor."</td><td>".$titlu."<td>".$editura."</td></td><td><a href=\"stergema.php?id=$cod\"> Sterge</a></td></tr>";
			$i++;
				}
	
}elseif((!empty($titlu))&&(empty($autor))&&(!empty($editura)))
			{
				$sql="SELECT * FROM carte,editura,autor WHERE carte.TITLU LIKE '%$titlu%' AND editura.NUME_ED LIKE '%$editura%' ORDER BY carte.ID_CARTE ASC";
				$result=mysql_query($sql);
			$i=0;
			while($row=mysql_fetch_array($result))	
			{	$cod=$row['ID_CARTE'];
				 $editura=$row['NUME_ED'];
				$autor=returnAutor($row['ID_AUTOR']);
				$titlu=$row['TITLU'];
				echo "<tr><td>".$i."</td><td>".$autor."</td><td>".$titlu."<td>".$editura."</td></td><td><a href=\"stergema.php?id=$cod\"> Sterge</a></td></tr>";
			$i++;
			}
			}
elseif((!empty($titlu))&&(!empty($autor))&&(empty($editura)))
			{
				$sql="SELECT * FROM carte,editura,autor WHERE carte.TITLU LIKE '%$titlu%' AND autor.NUME LIKE '%$autor%' ORDER BY carte.ID_CARTE ASC";
				$result=mysql_query($sql);
			$i=0;
			while($row=mysql_fetch_array($result))	
			{$cod=$row['ID_CARTE'];
				 $editura=returnEditura($row['ID_EDITURA']);
				$autor=returnAutor($row['ID_AUTOR']);
				echo "<tr><td>".$i."</td><td>".$autor."</td><td>".$row['TITLU']."<td>".$editura."</td></td><td><a href=\"stergema.php?id=$cod\"> Sterge</a></td></tr>";
			$i++;
			}	}
			elseif((empty($titlu))&&(!empty($autor))&&(!empty($editura)))
			{
				$sql="SELECT * FROM carte,editura,autor WHERE editura.NUME_ED LIKE '%$editura%' AND autor.NUME LIKE '%$autor%' ORDER BY carte.ID_CARTE ASC";
				$result=mysql_query($sql);
			$i=0;
			while($row=mysql_fetch_array($result))	
			{$cod=$row['ID_CARTE'];
				 $editura=$row['ID_EDITURA'];
				$autor=$row['ID_AUTOR'];
				$titlu=$row['TITLU'];
				echo "<tr><td>".$i."</td><td>".$autor."</td><td>".$titlu."<td>".$editura."</td></td><td><a href=\"stergema.php?id=$cod\"> Sterge</a></td></tr>";
			$i++;
			}
			}
			elseif(!empty($autor)&&(empty($editura))&&(empty($titlu)))
{		
		
		$sql="SELECT * FROM autor WHERE NUME LIKE '%$autor%'";
		$reusult=mysql_query($sql);
		$row=mysql_fetch_array($reusult);
		$autor_nume=$row['NUME'];
		$autor_id=$row['COD'];
		//echo $autor_id." ".$autor_nume;
			$sql="SELECT * FROM carte WHERE ID_AUTOR='$autor_id'";
			$reusult=mysql_query($sql);
			$i=0;
			while($row=mysql_fetch_array($reusult))
		{	$cod=$row['ID_CARTE'];
		$editura=returnEditura($row['ID_EDITURA']);
			echo "<tr><td>".$i."</td><td>".$autor_nume."</td><td>".$row['TITLU']."<td>".$editura."</td></td><td><a href=\"stergema.php?id=$cod\"> Sterge</a></td></tr>";
			$i++;
			}
	}elseif(!empty($editura)&&(empty($autor))&&(empty($titlu)))
	{
		
		$sql="SELECT * from editura WHERE NUME_ED LIKE '%$editura%'";
		$result=mysql_query($sql);
		$row=mysql_fetch_array($result);
		$id_ediutura=$row['ID_EDITURA'];
		$nume_editura=$row['NUME_ED'];
			$sql="SELECT * FROM carte WHERE ID_EDITURA='$id_ediutura'";
			$reusult=mysql_query($sql);
			$i=0;
			while($row=mysql_fetch_array($reusult))
			{$cod=$row['ID_CARTE'];
				$autor=returnAutor($row['ID_AUTOR']);
				echo "<tr><td>".$i."</td><td>".$autor."</td><td>".$row['TITLU']."</td><td>".$nume_editura."</td></td><td><a href=\"stergema.php?id=$cod\"> Sterge</a></td></tr>";
				$i++;
				}
		
		}
		elseif(!empty($titlu)&&(empty($autor))&&(empty($editura)))
		{
			$sql="SELECT * FROM carte WHERE TITLU LIKE '%$titlu%'";
			$result=mysql_query($sql);
			$i=0;
			while($row=mysql_fetch_array($result))	
			{$cod=$row['ID_CARTE'];
				$editura=returnEditura($row['ID_EDITURA']);
				$autor=returnAutor($row['ID_AUTOR']);
				echo "<tr><td>".$i."</td><td>".$autor."</td><td>".$row['TITLU']."</td><td>".$editura."</td></td><td><a href=\"stergema.php?id=$cod\"> Sterge</a></td></tr>";
				$i++;
				}		
			}
			if($i==0)
			echo "ne pare rau nu s-a gasit cartea dumneavoastra";	
				
	echo "</table>";
?>


</div> 
<div id="footer">

Copyright Racasan Vlad
</div>   
   
</div>
</body>
</html>

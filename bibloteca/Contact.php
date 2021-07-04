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

<table>

	
	<tr>
		<td  class="txt">Informatii personale</td>
	</tr>
	<tr>
		<td class="st">Nume si Prenume</td>
		<td colspan="2">Racasan Vlad</td>
	</tr>
	<tr>
		<td class="st">Adresa</td>
		<td colspan="2">Aleea Petuniei nr 12 A</td>
	</tr>
	<tr>
		<td class="st">Telefoane</td>
		<td colspan="2">0752229631</td>
	</tr>
	<tr>
		<td class="st">email</td>
		<td colspan="2">lord_rakasan@yahoo.com</td>
	</tr>
	<tr>
		<td class="st">Nationalitate</td>
		<td colspan="2">Romana</td>
	</tr>
	<tr>
		<td class="st">Data nasterii</td>
		<td colspan="2">22.11.1989</td>
	</tr>
	<tr>
		<td class="st">Sex</td>
		<td colspan="2">Masculin</td>
	</tr>
	<tr>
		<td class="st">Locul de munca vizat</td>
		<td colspan="2">Administrator baza de date</td>
	</tr>
	<tr>
		<td class="st">Domeniul ocupational</td>
	</tr>
	<tr>
		<td class="st">Experienta profesionala</td>
	</tr>
	<tr>
		<td class="st">Perioada</td>
		<td colspan="2">Din martie 2011 pana in prezent</td>
	</tr>
	<tr>
		<td class="st">Functia sau postul ocupat</td>
		<td colspan="2">Depanator PC si administrator baze de date, specialist IT</td>
	</tr>
	<tr>
		<td class="st">Principalele activitati si responsabilitati</td>
		<td colspan="2">Actualizarea bazelor de date, reparatia componentelor pc		</td>
	</tr>
	<tr>
		<td class="st">Numnele si adresa angajatorului</td>
		<td colspan="2">&nbsp;</td>
	</tr>
	<tr>	
		<td class="col" >Educatie si formare</td>
	</tr>
	<tr>
		<td class="st">Perioada</td>
		<td colspan="2">1998-2011</td>
	</tr>
	<tr>
		<td class="st">Calificare/diploma obtinuta</td>
		<td colspan="2">Inginer diplomat, profil Ingineria Sistemelor Multimedia specializarea fabrica 

digitala</td>
	</tr>
	<tr>
		<td class="st"> Discipline principale</td>
		<td colspan="2"> matematica arhitectura calculatoarelor, lucrul cu baze de date, ingineria 

sistemelor de programare</td>
	</tr>
	<tr>
		<td class="st">Numele institutiei</td>
		<td colspan="2">Lucian Blaga, Hermman Oberth</td>
	</tr>
	<tr>
		<td class="col">Aptitudini si competente personale</td>
	</tr>
	<tr>
		<td class="st">Limba materna</td>
		<td colspan="2">Romana</td>
	</tr>
	<tr>
		<td class="st">Limba(i) straina(e) cunoscute</td>
		<td colspan="2">Engleza si germana</td>
	</tr>
	<tr>
		<td class="st">autoevaluare</td>
		<td colspan="2">
			<table border="1">
				<tr>
					<td colspan="4">    </td>
					<td colspan="4">Citire</td>		
					<td colspan="2">Scriere</td>
				</tr>
				<tr>
					<td colspan="2">Ascultare</td>
					<td colspan="2">Citire</td>
					<td colspan="2">participare la conversatie</td>
					<td colspan="2">Discurs oral</td>
					<td colspan="2">exprimare scrisa</td>
				</tr>
				<tr>
					<td>C1</td>
					<td>Utilizator Experimentat</td>
					<td>C1</td>
					<td>Utilizator Experimentat</td>
					<td>C1</td>
					<td>Utilizator Experimentat</td>
					<td>C1</td>
					<td>Utilizator Experimentat</td>
					<td>C1</td>
					<td>Utilizator Experimentat</td>
				</tr>
				<tr>
					<td>C1</td>
					<td>Utilizator Experimentat</td>
					<td>C1</td>
					<td>Utilizator Experimentat</td>
					<td>C1</td>
					<td>Utilizator Experimentat</td>
					<td>C1</td>
					<td>Utilizator Experimentat</td>
					<td>C1</td>
					<td>Utilizator Experimentat</td>
				</tr>
			</table>
		</td>
       </tr>
    </table>
</div> 
<div id="footer">
Copyright Racasan Vlad
</div>   
   
</div>
</body>
</html>

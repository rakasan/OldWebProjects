<?php
include "connect.php";
session_start();

	$id_user = $_SESSION['id_user'];
	$sql = "DELETE	FROM experienta_aiesec WHERE ID_USER =".$id_user;
	mysql_query($sql,$bazadedate);

		if(isset($_POST['Pozitie_1']) && isset($_POST['tara_1']) && isset($_POST['comitet_local_1']) && isset($_POST['pana_aiesec_1']) && isset($_POST['din_aiesec_1']) )
		{
		
		$Pozitie_1 		= mysql_real_escape_string($_POST['Pozitie_1']);
		$tara_1 		= mysql_real_escape_string($_POST['tara_1']);
		$comitet_local_1= mysql_real_escape_string($_POST['comitet_local_1']);
		$pana_aiesec_1	= mysql_real_escape_string($_POST['pana_aiesec_1']);
		$din_aiesec_1	= mysql_real_escape_string($_POST['din_aiesec_1']);
		$sql = "INSERT INTO `test`.`experienta_aiesec` (`ID_XP_@`, `ID_USER`, `POZITIE`, `TARA`, `COMITET_LOCAL`, `DIN`, `PANA`) 
				VALUES (NULL, '".$id_user."', '".$Pozitie_1."', '".$tara_1."', '".$comitet_local_1."', '".$din_aiesec_1."', '".$pana_aiesec_1."');";
		mysql_query($sql,$bazadedate);
	
		}
	
	if(isset($_POST['Pozitie_2']) && isset($_POST['tara_2']) && isset($_POST['comitet_local_2']) && isset($_POST['pana_aiesec_2']) && isset($_POST['din_aiesec_2']) )
		{
		
		$Pozitie_2 		= mysql_real_escape_string($_POST['Pozitie_2']);
		$tara_2 		= mysql_real_escape_string($_POST['tara_2']);
		$comitet_local_2= mysql_real_escape_string($_POST['comitet_local_2']);
		$pana_aiesec_2	= mysql_real_escape_string($_POST['pana_aiesec_2']);
		$din_aiesec_2	= mysql_real_escape_string($_POST['din_aiesec_2']);
		$sql = "INSERT INTO `test`.`experienta_aiesec` (`ID_XP_@`, `ID_USER`, `POZITIE`, `TARA`, `COMITET_LOCAL`, `DIN`, `PANA`) 
				VALUES (NULL, '".$id_user."', '".$Pozitie_2."', '".$tara_2."', '".$comitet_local_2."', '".$din_aiesec_2."', '".$pana_aiesec_2."');";
		mysql_query($sql,$bazadedate);
			}
	
	if(isset($_POST['Pozitie_3']) && isset($_POST['tara_3']) && isset($_POST['comitet_local_3']) && isset($_POST['pana_aiesec_3']) && isset($_POST['din_aiesec_3']) )
		{
		
		$Pozitie_3 		= mysql_real_escape_string($_POST['Pozitie_3']);
		$tara_3 		= mysql_real_escape_string($_POST['tara_3']);
		$comitet_local_3= mysql_real_escape_string($_POST['comitet_local_3']);
		$pana_aiesec_3	= mysql_real_escape_string($_POST['pana_aiesec_3']);
		$din_aiesec_3	= mysql_real_escape_string($_POST['din_aiesec_3']);
		$sql = "INSERT INTO `test`.`experienta_aiesec` (`ID_XP_@`, `ID_USER`, `POZITIE`, `TARA`, `COMITET_LOCAL`, `DIN`, `PANA`) 
				VALUES (NULL, '".$id_user."', '".$Pozitie_3."', '".$tara_3."', '".$comitet_local_3."', '".$din_aiesec_3."', '".$pana_aiesec_3."');";
		mysql_query($sql,$bazadedate);
	
		}
		
		 $redir = $_SESSION['redir'];
      header('Location:'.$redir);

?>
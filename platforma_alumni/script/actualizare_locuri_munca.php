<?php
include "connect.php";
session_start();

	$id_user = $_SESSION['id_user'];
	$sql = "DELETE	FROM experienta_de_munca WHERE ID_USER =".$id_user;
	mysql_query($sql,$bazadedate);

	if(isset($_POST['pozitie_1']) && isset($_POST['firma_1']) && isset($_POST['din_1']) && isset($_POST['pana_in_1']) )
		{
		
		$pozitie_1 		= mysql_real_escape_string($_POST['pozitie_1']);
		$firma_1 		= mysql_real_escape_string($_POST['firma_1']);
		$din_1 			= mysql_real_escape_string($_POST['din_1']);
		$pana_in_1		= mysql_real_escape_string($_POST['pana_in_1']);
		$sql = " INSERT INTO experienta_de_munca (`ID_XP`, `ID_USER`, `POZITIE`, `INSTITUTIE`, `DIN`, `PANA`) 
					VALUES (NULL, '".$id_user."', '".$pozitie_1."', '".$firma_1."', '".$din_1."', '".$pana_in_1."');";
		mysql_query($sql,$bazadedate);
		
		echo "1";
		}	
	if(isset($_POST['pozitie_2']) && isset($_POST['firma_2']) && isset($_POST['din_2']) && isset($_POST['pana_in_2']) )
		{
		
		$pozitie_2 		= mysql_real_escape_string($_POST['pozitie_2']);
		$firma_2 		= mysql_real_escape_string($_POST['firma_2']);
		$din_2 			= mysql_real_escape_string($_POST['din_2']);
		$pana_in_2		= mysql_real_escape_string($_POST['pana_in_2']);
		
		$sql = " INSERT INTO experienta_de_munca (`ID_XP`, `ID_USER`, `POZITIE`, `INSTITUTIE`, `DIN`, `PANA`) 
					VALUES (NULL, '".$id_user."', '".$pozitie_2."', '".$firma_2."', '".$din_2."', '".$pana_in_2."');";
		mysql_query($sql,$bazadedate);
	
		echo "2";
		}
	if(isset($_POST['pozitie_3']) && isset($_POST['firma_3']) && isset($_POST['din_3']) && isset($_POST['pana_in_3']) )
		{
		
		$pozitie_3 		= mysql_real_escape_string($_POST['pozitie_3']);
		$firma_3 		= mysql_real_escape_string($_POST['firma_3']);
		$din_3 			= mysql_real_escape_string($_POST['din_3']);
		$pana_in_3		= mysql_real_escape_string($_POST['pana_in_3']);
		$sql = " INSERT INTO experienta_de_munca (`ID_XP`, `ID_USER`, `POZITIE`, `INSTITUTIE`, `DIN`, `PANA`) 
					VALUES (NULL, '".$id_user."', '".$pozitie_3."', '".$firma_3."', '".$din_3."', '".$pana_in_3."');";
		mysql_query($sql,$bazadedate);
	
		echo "3";
		}
		
		 $redir = $_SESSION['redir'];
      header('Location:'.$redir);

?>
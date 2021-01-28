<?php
include "connect.php";
session_start();
//educatie
	$id_user = $_SESSION['id_user'];
	$sql = "DELETE	FROM educatie WHERE ID_USER =".$id_user;
	mysql_query($sql,$bazadedate);

	 if(isset($_POST['calificare_1']) && isset($_POST['insitutie_1']) && isset($_POST['data_admitere_1']) && isset($_POST['data_absolvire_1']) )
		{
		
		$calificare_1 		= mysql_real_escape_string($_POST['calificare_1']);
		$institutie_1 		= mysql_real_escape_string($_POST['insitutie_1']);
		$data_admitere_1 	= mysql_real_escape_string($_POST['data_admitere_1']);
		$data_absolvire_1	= mysql_real_escape_string($_POST['data_absolvire_1']);
		$sql = "INSERT INTO educatie (`ID_EDUCATIE`, `ID_USER`, `CALIFICARE`, `INSTITUTIE`, `DATA_ADMITERE`, `DATA_ABSOLVIRE`) VALUES 
							(NULL,'".$id_user. "','".$calificare_1."', '".$institutie_1."', '".$data_admitere_1."', '".$data_absolvire_1."');";
		mysql_query($sql,$bazadedate);
		
		}
	 if(isset($_POST['calificare_2']) && isset($_POST['insitutie_2']) && isset($_POST['data_admitere_2']) && isset($_POST['data_absolvire_2']) )
		{
		
		$calificare_2 		= mysql_real_escape_string($_POST['calificare_2']);
		$institutie_2 		= mysql_real_escape_string($_POST['insitutie_2']);
		$data_admitere_2 	= mysql_real_escape_string($_POST['data_admitere_2']);
		$data_absolvire_2	= mysql_real_escape_string($_POST['data_absolvire_2']);
		
		$sql = "INSERT INTO educatie (`ID_EDUCATIE`, `ID_USER`, `CALIFICARE`, `INSTITUTIE`, `DATA_ADMITERE`, `DATA_ABSOLVIRE`) VALUES 
							(NULL,'".$id_user. "','".$calificare_2."', '".$institutie_2."', '".$data_admitere_2."', '".$data_absolvire_2."');";
		echo mysql_query($sql,$bazadedate);
		
		}
	if(isset($_POST['calificare_3']) && isset($_POST['insitutie_3']) && isset($_POST['data_admitere_3']) && isset($_POST['data_absolvire_3']) )
		{
		
		$calificare_3 		= mysql_real_escape_string($_POST['calificare_3']);
		$institutie_3 		= mysql_real_escape_string($_POST['insitutie_3']);
		$data_admitere_3 	= mysql_real_escape_string($_POST['data_admitere_3']);
		$data_absolvire_3	= mysql_real_escape_string($_POST['data_absolvire_3']);
		$sql = "INSERT INTO educatie (`ID_EDUCATIE`, `ID_USER`, `CALIFICARE`, `INSTITUTIE`, `DATA_ADMITERE`, `DATA_ABSOLVIRE`) VALUES 
							(NULL,'".$id_user. "','".$calificare_3."', '".$institutie_3."', '".$data_admitere_3."', '".$data_absolvire_3."');";
		mysql_query($sql,$bazadedate);
		
		}
		
		 $redir = $_SESSION['redir'];
       header('Location:'.$redir);

?>
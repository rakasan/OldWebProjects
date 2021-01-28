<?php
phpinfo();
include "connect.php";
session_start();

	$id_user = $_SESSION['id_user'];
	$sql = "DELETE	FROM domeniu_de_activitate WHERE ID_USER =".$id_user;
	$result = mysql_query($sql,$bazadedate);
		
	$mysql  = "SELECT * FROM HELPER_DOMENIU_ACTIVITATE";
		$result =  mysql_query($mysql,$bazadedate);
		while($row = mysql_fetch_array($result,MYSQL_ASSOC))
			{
				$id = $row['ID_ACTIVITATE'];
				$nume = $row['NUME'];
				$nume = str_replace(" ","_",$nume);
				if(isset($_POST[$nume]))
				{
					echo $nume;
					$sql = "INSERT INTO `domeniu_de_activitate` (`ID_DOMENIU_ACTIVITATE`, `ID_ACTIVITATE`,`ID_USER`) VALUES (NULL, '".$id ."', '" . $id_user. "');"; 
					echo $sql;
					$rezult =  mysql_query($sql);
					if($rezult)
						echo "ok";
					else
						echo "nu";
					echo "<br />";
					
				}
			}
		
	 $redir = $_SESSION['redir'];
     header('Location:'.$redir);

?>
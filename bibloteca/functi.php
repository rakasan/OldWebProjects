<?php
include "connect.php";

function returnID($nume)
{
	$sql="SELECT ID FROM loseri WHERE NUME like '$nume'";
	$result=mysql_query($sql);
	$row=mysql_fetch_array($result);
	return $row['ID'];
	}
function returnUser($id)
{
	$sql="SELECT user FROM login WHERE ID='$id'";
	$result=mysql_query($sql) or die(mysql_error());
	$row=mysql_fetch_array($result);
	return $row['user'];
	}
function returnCarte($id_nume)
{
	$sql="SELECT TITLU FROM carte WHERE ID_CARTE='$id_nume'";
	$result=mysql_query($sql);
	$result=mysql_fetch_array($result);
	return $result['TITLU'];
	}
function returnAutor($id)
{
	$sql="SELECT NUME FROM autor WHERE COD='$id'";
	$result=mysql_query($sql);
	$row=mysql_fetch_array($result);
	return $row['NUME'];
	
	}
function returnEditura($id)
{
	$sql1="SELECT * FROM editura WHERE ID_EDITURA='$id'";
	$result=mysql_query($sql1);
	$row=mysql_fetch_array($result);
	return $row['NUME_ED'];
	
	}
	function initializare() {	session_start();
		$_SESSION['user']='Guest';
		$_SESSION['type']='0';
		
	}
	function verifica() {
		if (isset($_SESSION['user']) && isset($_SESSION['type'])) {
			$user = $_SESSION['user'];
			$pass = $_SESSION['pass'];
			
			$sql = "SELECT id FROM login WHERE user = '$user' AND pass = '$pass'";
			$result = mysql_query($sql);
			$num_rows = mysql_num_rows($result);

			if ($num_rows > 0) {
				return true;
			}
		}
		header("Location: index.php?error=1");
		exit; 
		return false;
	}

?>
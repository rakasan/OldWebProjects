<?php
session_start();
//phpinfo();
include "connect.php";
$email = mysql_real_escape_string($_POST['email']);
	$password = sha1($_POST['password']);
	$nume = mysql_real_escape_string($_POST['nume']);
	$prenume = mysql_real_escape_string($_POST['prenume']);
	$data_nasteri = mysql_real_escape_string($_POST['data_nasteri']);
	$nationalitate = mysql_real_escape_string($_POST['nationalitate']);
	$oras = mysql_real_escape_string($_POST['oras']);
	$tara = mysql_real_escape_string($_POST['tara']);
	$telefon = mysql_real_escape_string($_POST['telefon']);
	$twitter = mysql_real_escape_string($_POST['twiter']);
	$skype = mysql_real_escape_string($_POST['skype']);
	$linktin = mysql_real_escape_string($_POST['linktin']);
	if($_POST['password'] != "parola")
	{
	$sql = "UPDATE info_utilizatori SET 
			ADRESA_EMAIL ='".$email."',
			PAROLA  = '".$password."',
			ID_LINKTIN = '".$linktin."',
			NUME = '".$nume."',
			PRENUME ='".$prenume."',
			DATA_NASTERI ='".$data_nasteri."',
			NATIONALITATE  = '".$nationalitate."',
			ORAS_CURENT = '".$oras."',
			TARA_CURENTA = '".$tara."',
			NUMAR_TELEFON ='".$telefon."',
			TWITTER ='".$twitter."',
			SKYPE = '".$skype."' 
			WHERE ID_USER = ".$_SESSION['id_user']." ";
				
	}
	else
	{
	$sql = "UPDATE info_utilizatori SET 
			ADRESA_EMAIL ='".$email."',
			ID_LINKTIN = '".$linktin."',
			NUME = '".$nume."',
			PRENUME ='".$prenume."',
			DATA_NASTERI ='".$data_nasteri."',
			NATIONALITATE  = '".$nationalitate."',
			ORAS_CURENT = '".$oras."',
			TARA_CURENTA = '".$tara."',
			NUMAR_TELEFON ='".$telefon."',
			TWITTER ='".$twitter."',
			SKYPE = '".$skype."' 
			WHERE ID_USER = ".$_SESSION['id_user']." ";
	}
	$result = mysql_query($sql,$bazadedate);
	echo $sql;
	 if($result)
	 echo "update perfect";
	 else 
	 echo "naspa";
	 

			
	$sql = " SELECT * FROM INFO_UTILIZATORI  WHERE ID_USER =".$_SESSION['id_user']." ";
	

    $result = mysql_query($sql,$bazadedate);
    if($row = mysql_fetch_array($result,MYSQL_ASSOC))
        {
		echo "aici";
        $_SESSION['logat'] = true;
        $_SESSION['id_user'] = $row['ID_USER'];
        $_SESSION['adresa_email'] = $row['ADRESA_EMAIL'];
        $_SESSION['tip'] = $row['TIP_USER'];
        $_SESSION['validare'] = $row['VALIDARE'];
        $_SESSION['id_linktin'] =$row['ID_LINKTIN'];
        $_SESSION['nume'] = $row['NUME'];
        $_SESSION['prenume'] = $row['PRENUME'];
        $_SESSION['data_nasteri'] = $row['DATA_NASTERI'];
        $_SESSION['nationalitate'] = $row['NATIONALITATE'];
        $_SESSION['oras_curent'] = $row['ORAS_CURENT'];
        $_SESSION['tara_curenta'] = $row['TARA_CURENTA'];
        $_SESSION['numar_telefon'] = $row['NUMAR_TELEFON'];
        $_SESSION['twitter']= $row['TWITTER'];
        $_SESSION['skype'] = $row['SKYPE'];
//preluare poza
            $sql = " SELECT * FROM POZA WHERE ID_USER ='".$_SESSION['id_user']."'";
            $result2 = mysql_query($sql,$bazadedate);
            $row2 = mysql_fetch_array($result2,MYSQL_ASSOC);
            $_SESSION['poza'] = "obj/img/alumni/".$row2['NUME'];		
		}
			
	 $redir = $_SESSION['redir'];
       header('Location:'.$redir);
				
	 ?>
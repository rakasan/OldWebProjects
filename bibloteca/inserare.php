<?php
include "connect.php";
$User=$_POST["USER"];
$Pass=$_POST["password"];
$Nume=$_POST["NUME"];
$PRENUME=$_POST["PRENUME"];
$ADRESA=$_POST["ADRESA"];
$FIX=$_POST["NUMARTELEFONFIX"];
$MOBIL=$_POST["NUMARTELEFONMOBIL"];
$EMAIL=$_POST["EMAIL"];
$CNP=$_POST["CNP"];
$FACULTATE=$_POST["FACULTATE"];
$User = stripslashes($User);
$Pass = sha1($Pass);
$Nume = stripslashes($Nume);
$PRENUME =stripslashes($PRENUME);
$ADRESA= stripslashes($ADRESA);
$MOBIL=stripslashes($MOBIL);
$EMAIL=stripslashes($EMAIL);
$CNP=stripslashes($CNP);
$FACULTATE=stripslashes($FACULTATE);
$User = mysql_real_escape_string($User);
$Pass = mysql_real_escape_string($Pass);
$PRENUME= mysql_real_escape_string($PRENUME);
$ADRESA=  mysql_real_escape_string($ADRESA);
$FIX= mysql_real_escape_string($FIX);
$MOBIL= mysql_real_escape_string($MOBIL);
$EMAIL= mysql_real_escape_string($EMAIL);
$CNP= mysql_real_escape_string($CNP);
$FACULTATE= mysql_real_escape_string($FACULTATE);
$NR_CARTI=0;

$sql1="INSERT INTO `login` (`user`, `pass`, `type`) VALUES ('$User', '$Pass', '2')";
$result3=mysql_query($sql1);

$result1=mysql_insert_id();

$sql="INSERT INTO `loseri` (`NUME`, `PRENUME`, `ADRESA`, `TELEFONFIX`, `TELEFONMOBIL`, `EMAIL`, `CNP`, `ID`, `FACULTATE`, `ID_CURENT`, `NR_CARTI`) VALUES ('$Nume', '$PRENUME', '$ADRESA', '$FIX', '$MOBIL', '$EMAIL', '$CNP', '$result1', '$FACULTATE', NULL, '0')";
$result2=mysql_query($sql);

header("location:index.php");
?>
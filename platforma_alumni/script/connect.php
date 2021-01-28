<?php
function redirectlogin()
{

    $redir = $url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];

    if(isset($_SESSION['logat']))
    {

        if(!$_SESSION['logat'])
        {
           $_SESSION['redir'] = $redir;
            header('location:sign-in.php');
        }
    }
    else
    {
        $_SESSION['redir'] = $redir;
        header('location:sign_in.php');
        }
}
$host='mysql.hostway.ro';
$user='rcsnro69_alumni_romania';
$pass='@13s3cr0m@n1@';
$db='rcsnro69_alumni_romania';
$bazadedate = mysql_connect($host,$user,$pass) OR die("eroare la SBD");
mysql_select_db($db) OR die("nu am gasit BD");


?>

<?php
session_start();
include "include\connect.php";
if(isset($_POST['submit']))
{
    $email = mysql_real_escape_string($_POST['email']);
    $password = sha1($_POST['password']);
    $sql = " SELECT * FROM INFO_UTILIZATORI  WHERE ADRESA_EMAIL ='".$email."' AND PAROLA = '".$password."'";


    $result = mysql_query($sql,$bazadedate);
    if($row = mysql_fetch_array($result,MYSQL_ASSOC))
        {
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
        if(isset($_SESSION['redir']))
        {
            echo "aici";
            $redir = $_SESSION['redir'];
            header('Location:'.$redir);
        }
      else
        header( 'Location:home.php' ) ;
        }
    else
        header( 'Location:sign_in.php?error=1' ) ;
}


?>



<html>
<head>
<link rel="stylesheet" type="text/css" href="obj/css/style.css">
</head>
<body>
<div class="header">
	<div class="wrapper">
        <a href="<?php
        if(isset($_SESSION['logat']))
        {
            if($_SESSION['logat'])
                echo "home.php";

        }
        else
            echo "index.php";
        ?> "><img  src="obj/img/logo_aiesec.png"></a>
		<!--
		<nav id="nav">
		<ul>
			<li class="profil"><a href ="profil.php">Profil</a><span></span></li>
			<li class="cauta"><a href="">Cauta</a><span></span></li>
			<li class="povesti"><a href="povesti.php">Povesti</a><span></span></li>
			<li class="despre"><a href="despre.php">Despre platforma</a><span></span></li>
		</ul>
		</nav>
	-->
		<div clas="nav_secund">
		<ul>
		<li class="right user"><img src="obj/img/profile.png">
			<ul >
                <?php
                if(isset($_SESSION['logat']))
                {
                    if($_SESSION['logat'])
                    {
                        echo "<li class=\"graduate\"><a href=\"#\"><img src=\"obj/img/graduate.png/\">Adauga poveste</a></li>";
                        echo "<li class=\"key\"><a href=\"sign_out.php\"><img src=\"obj/img/key.png\">Delogare</a></li>";
                    }
                }
                else
                {
                    echo "<li class=\"graduate\"><a href=\"sign_up.php\"><img src=\"obj/img/graduate.png\">Inscriere</a></li>";
                    echo "<li class=\"key\"><a href=\"sign_in.php\"><img src=\"obj/img/key.png\">Logare</a></li>";
                }
                ?>

            </ul>
		</li>
		</ul>
	</div>

	</div>
</div>


<div class="more clear">
	<?php include "include/slideshow.php";?>
	</div>
	<div class="wrapper ">
		<form action="sign_in.php" method="POST">
			<div class="top_form">
				<h2>Logare</h2>
			</div>
            <?php
            if(isset($_GET['error']))
            echo "<span>Combinatia USERNAME sau PAROLA invalida!</span>";
            ?>
			<div class="inp"><label for="email"> adresa de email </label><input name="email" type="mail"/></div>
			<div class="inp"><label for="password">parola</label><input name="password" type="password" /></div>
			<div class="inp"><input type="submit" name ="submit" value="Logare"/></div>
			
		</form>

	</div>

	<footer class="footer clear">
		<div class="wrapper">
		<p>@copyright AIESEC ROMANIA</p>	
		</div>
	</footer>


<?php include "include/script_js.php";?>
</html>
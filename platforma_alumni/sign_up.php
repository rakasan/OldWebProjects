<?php
include "include/connect.php";
session_start();
if(isset($_POST['submit']))
	//phpinfo();
	{
//info personale
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
	$sql = "INSERT INTO info_utilizatori (`ID_USER` ,`ADRESA_EMAIL` , `PAROLA` ,`TIP_USER` ,`VALIDARE` ,`ID_LINKTIN` ,`NUME` ,`PRENUME` ,`DATA_NASTERI` ,
				`NATIONALITATE` ,`ORAS_CURENT` ,`TARA_CURENTA` ,`NUMAR_TELEFON` ,`TWITTER` ,`SKYPE` ,`LAST_ACTIV`)VALUES (
				NULL ,'".$email."','".$password."','1','1','','".$nume."','".$prenume."','".$data_nasteri."','".$nationalitate."','".$oras."','".$tara."','".$telefon."','"
				.$twitter."','".$skype."','');";
				
	 mysql_query($sql,$bazadedate);
	 $id_user = mysql_insert_id();
//educatie
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
//xp
	if(isset($_POST['pozitie_1']) && isset($_POST['firma_1']) && isset($_POST['din_1']) && isset($_POST['pana_in_1']) )
		{
		
		$pozitie_1 		= mysql_real_escape_string($_POST['pozitie_1']);
		$firma_1 		= mysql_real_escape_string($_POST['firma_1']);
		$din_1 			= mysql_real_escape_string($_POST['din_1']);
		$pana_in_1		= mysql_real_escape_string($_POST['pana_in_1']);
		$sql = " INSERT INTO experienta_de_munca (`ID_XP`, `ID_USER`, `POZITIE`, `INSTITUTIE`, `DIN`, `PANA`) 
					VALUES (NULL, '".$id_user."', '".$pozitie_1."', '".$firma_1."', '".$din_1."', '".$pana_in_1."');";
		mysql_query($sql,$bazadedate);

		
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
	
		}
// xp @	
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
		$mysql  = "SELECT * FROM HELPER_DOMENIU_ACTIVITATE";
		$result =  mysql_query($mysql,$bazadedate);
		while($row = mysql_fetch_array($result,MYSQL_ASSOC))
			{
				$id = $row['ID_ACTIVITATE'];
				$nume = $row['NUME'];
				if(isset($_POST[$nume])){
					$sql = "INSERT INTO `domeniu_de_activitate` (`ID_DOMENIU_ACTIVITATE`, `ID_ACTIVITATE`,`ID_USER`) VALUES (NULL, '".$id ."', '" . $id_user. "');"; 
					echo $sql;
			mysql_query($sql);
			//echo $_POST[$nume];
		}
			}
	}

?>
<link rel="stylesheet" href="obj/js/jquery/themes/base/jquery.ui.all.css">
	<script src="obj/js/jquery/jquery-1.9.1.js"></script>
	<script src="obj/js/jquery/ui/jquery.ui.core.js"></script>
	<script src="obj/js/jquery/ui/jquery.ui.widget.js"></script>
	<script src="obj/js/jquery/ui/jquery.ui.datepicker.js"></script>
	<script src="obj/js/jquery/ui/jquery.ui.accordion.js"></script>
	<script src="obj/js/jquery/ui/jquery.ui.button.js"></script>
	
  <!--<script src="http://code.jquery.com/ui/1.10.2/jquery-ui.js"></script> -->
<script src="obj/js/script.js"></script>
 <script>
  $(function() {
  $( ".datepicker" ).datepicker({
    changeMonth :true,
    changeYear: true	
    });
    
  });
  	$(function() {
		var icons = {
			header: "ui-icon-circle-arrow-e",
			activeHeader: "ui-icon-circle-arrow-s"
		};
		$( ".accordion" ).accordion({
			icons: icons,
			heightStyle: "content"
		});
	
	});
  </script>
<html>
<head>
<link rel="stylesheet" type="text/css" href="obj/css/style.css"/>
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
		<?php include "include/nav_secund.php";?>

	</div>
</div>


<div class="more clear">
		<?php include "include/slideshow.php";?>

<!--
		<div id="slideshow">

			<ul class="slides">
		    	<li><img src="obj/img/photos/1.jpg" width="620" height="320" alt="Marsa Alam underawter close up" /></li>
		        <li><img src="obj/img/photos/2.jpg" width="620" height="320" alt="Turrimetta Beach - Dawn" /></li>
		        <li><img src="obj/img/photos/3.jpg" width="620" height="320" alt="Power Station" /></li>
		        <li><img src="obj/img/photos/4.jpg" width="620" height="320" alt="Colors of Nature" /></li>
		    </ul>

		    <span class="arrow previous"></span>
		    <span class="arrow next"></span>
		</div>
	-->


		
	</div>
	<div class="wrapper ">
		<form  class="form_sign" action="sign_up.php" method="POST">
			<div class="top_form">
				<h2>Inscriere</h2>
			</div>
<div class="accordion">
	<h3>Informatii <span>personale</span></h3>
			
		<div class="expend">			
					
		<p class="inp"><label>Adresa de email</label><input type="email"  name="email" /></p>
		<p class="inp"><label>Parola </label><input type ="password" name="password"/></p>
		<p class="inp"><label>Nume</label><input type="text" name ="nume" /></p>
		<p class="inp"><label>Prenume </label><input type="text"  name ="prenume"/></p> 
		<p class="inp"><label>Data Nasteri </label><input type="date" value="" id="data_datepicker" name="data_nasteri"/></p>
	
	
		<p class="inp"><label>Nationalitate</label><input type="text" value ="" name="nationalitate" /></p>
		<p class="inp"><label>Oras curent</label><input type="text"  name="oras" /></p>
		<p class="inp"><label>Tara Curenta</label><input type="text"  name="tara" /></p>
		<p class="inp"><label>Telefon</label><input type="text"  name="telefon" /></p>
		<p class="inp"><label>Twiter</label><input type="text" name="twiter"  /></p>
		<p class="inp"><label>Skype</label><input type="text" name="skype"  /></p>
	</div>		
	
	


<h3 class="clear">Educatie</h3>
<div class="expend">
	<div class="two left">		
		<p class="inp"><label>Calificare</label><input type="text" name="calificare_1" /></p>
		<p class="inp"><label>Institutie</label><input type="text" name="insitutie_1"/></p>
		<p class="inp"><label>Din</label><input type="date" name="data_admitere_1"  /></p>
		<p class="inp"><label>Pana in</label><input type ="date" name ="data_absolvire_1" /></p>
	</div>    
	<div class="two right">
		<p class="inp"><label>Calificare</label><input type="text" name="calificare_2" /></p>
		<p class="inp"><label>Institutie</label><input type="text" name="insitutie_2"/></p>
		<p class="inp"><label>Din</label><input type="date" name="data_admitere_2"  /></p>
		<p class="inp"><label>Pana in</label><input type ="date" name ="data_absolvire_2" /></p>
	</div>
	<div class="two right">
		<p class="inp"><label>Calificare</label><input type="text" name="calificare_3" /></p>
		<p class="inp"><label>Institutie</label><input type="text" name="insitutie_3"/></p>
		<p class="inp"><label>Din</label><input type="date" name="data_admitere_3"  /></p>
		<p class="inp"><label>Pana in</label><input type ="date" name ="data_absolvire_3" /></p>
	</div>
</div>
<h3 class="clear">Experienta de munca</h3>
<div class="expend">
	<div class="two left">
	<div class="inp"><label>Pozitie</label><input type="text" name="pozitie_1"  /></div>
	<div class="inp"><label>Institutie</label><input type="text" name="firma_1"  /></div>
	<div class="inp"><label>Din</label><input type="date" name="din_1"  /></div>
	<div class="inp"><label>Pana in</label><input type ="date" name ="pana_in_1"   /></div>
	</div>
	<div class="two right">
	<div class="inp"><label>Pozitie</label><input type="text" name="pozitie_2"  /></div>
	<div class="inp"><label>Institutie</label><input type="text" name="firma_2"  /></div>
	<div class="inp"><label>Din</label><input type="date" name="din_2"  /></div>
	<div class="inp"><label>Pana in</label><input type ="date" name ="pana_in_2"   /></div>
	</div>
	<div class="two right">
	<div class="inp"><label>Pozitie</label><input type="text" name="pozitie_3"  /></div>
	<div class="inp"><label>Institutie</label><input type="text" name="firma_3"  /></div>
	<div class="inp"><label>Din</label><input type="date" name="din_3"  /></div>
	<div class="inp"><label>Pana in</label><input type ="date" name ="pana_in_3"  /></div>
	</div>
</div>




<h3 class="clear">Experienta AIESEC</h3>
<div class="expend">
	<div class="two left">
	<div class="inp"><label>Pozitie</label><input type ="text" name ="Pozitie_1" /></div>
	<div class="inp"><label>Tara</label><input type ="text" name ="tara_1" /></div>
	<div class="inp"><label>LC</label><input type="text" name ="comitet_local_1"/></div>
	<div class="inp"><label>Din</label><input type="date" name="din_aiesec_1" /></div>
	<div class="inp"><label>Pana in</label><input type="date" name="pana_aiesec_1" /></div>
	</div>
	<div class="two right">
	<div class="inp"><label>Pozitie</label><input type ="text" name ="Pozitie_2" /></div>
	<div class="inp"><label>Tara</label><input type ="text" name ="tara_2" /></div>
	<div class="inp"><label>LC</label><input type="text" name ="comitet_local_2" /></div>
	<div class="inp"><label>Din</label><input type="date" class="datepicker" name="din_aiesec_2" /></div>
	<div class="inp"><label>Pana in</label><input type="date" class="datepicker" name="pana_aiesec_2" /></div>
	</div>
	<div class="two right">
	<div class="inp"><label>Pozitie</label><input type ="text" name ="Pozitie_3"/></div>
	<div class="inp"><label>Tara</label><input type ="text" name ="tara_3" /></div>
	<div class="inp"><label>LC</label><input type="text" name ="comitet_local_3" /></div>
	<div class="inp"><label>Din</label><input type="date" class="datepicker" name="din_aiesec_3" /></div>
	<div class="inp"><label>Pana in</label><input type="date" class="datepicker" name="pana_aiesec_3" /></div>
	</div>
</div>


<h3>Domeniu de expertiza</h3>
<div class="expend">
<?php
$nr = 0;
$mysql  = "SELECT * FROM HELPER_DOMENIU_ACTIVITATE";
$result =  mysql_query($mysql,$bazadedate);
while($row = mysql_fetch_array($result,MYSQL_ASSOC))
{
	$id = $row['ID_ACTIVITATE'];
	$nume = $row['NUME'];
	if($nr%5==0)
		 echo "<div class = \"one left\">";
	echo "<div class=\"inp\"><label>" . $nume . "</label><input type=\"checkbox\" name=\"" . $nume . "\" value=\"" . $id . "\"/> </div>"; 
	$nr++;
      if($nr % 5 == 0)
   	  {
        echo "<hr/>";
        echo "</div>";
      }
}
      if($nr % 5 != 0)
        echo "</div>";

//<div class="inp"><label>Marketing</label><input type="checkbox" name="marketing" value="marketing" /> </div>
?>
</div>

</div>
<input type="submit" name="submit" />

</div>
</form>


	</div>

	<footer class="footer clear">
		<div class="wrapper">
		<p>@copyright AIESEC ROMANIA</p>	
		</div>
	</footer>


</body>

</html>
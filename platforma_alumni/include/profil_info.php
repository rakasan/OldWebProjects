<?php $_SESSION['redir']="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; ?>

<div id="profil_info">
	<div class="wrapper">
	  
	  <div class="right" >
             
            <?php
        echo "<img class=\"right\" src =\"".$_SESSION['poza']."\">";
    ?>

        <h2 class="edit_pic "><span>schimba imagina de profil</span></h2>
    <div id="form_imagine">
       <form class="right" action="script/step_upload_file.php"  method="post" enctype="multipart/form-data">
          
            <input type="file" value="Alege imaginea" name="file" id="file"/><br>
            <input type="submit" name="submit" value="Submit"/>
        </form> 
    </div>
    <div class="clear"></div>
    </div>
	
	
		<h2>Bine ati venit <span id="edit_info_personal">edit</span>  </h2>
          
      
       
       
       
  
		<?php

//   <ul class="left">
echo "<ul class=\"left\">";

   ?>
     
             <form id="form_info_personal" method="post" action="script/actualizare_info_personale.php">
        <div class="three left">
            <div class="inp"><label>Adresa de email</label><input type="email"  name="email" value = "<?php echo $_SESSION['adresa_email']; ?>" /></div>
            <div class="inp"><label>Parola </label><input type ="password" name="password" value= "parola"/></div>
            <div class="inp"><label>Nume</label><input type="text" name ="nume" value="<?php echo $_SESSION['nume']; ?>"/> </div>
            <div class="inp"><label>Prenume </label><input type="text"  name ="prenume" value="<?php echo $_SESSION['prenume'];?>"/> </div>
            <div class="inp"><label>Data Nasteri </label><input type="date" id="data_datepicker" name="data_nasteri" value="<?php echo $_SESSION['data_nasteri'];?>"/></div>
          </div>
          <div class="three right">
            <div class="inp"><label>Nationalitate</label><input type="text"  name="nationalitate" value="<?php echo $_SESSION['nationalitate'];?>" /></div>
            <div class="inp"><label>Oras curent</label><input type="text"  name="oras" value="<?php echo $_SESSION['oras_curent'];?>" /></div>
            <div class="inp"><label>Tara Curenta</label><input type="text"  name="tara" value="<?php echo $_SESSION['tara_curenta'];?>"/></div>
            <div class="inp"><label>Telefon</label><input type="text"  name="telefon" value="<?php echo $_SESSION['numar_telefon'];?>"/></div>
            <div class="inp"><label>Twiter</label><input type="text" name="twiter"  value="<?php echo $_SESSION['twitter'];?>"/></div>
            <div class="inp"><label>Skype</label><input type="text" name="skype"  value="<?php echo $_SESSION['skype'];?>"/></div>
			<div class="inp"><label>LinkedIn</label><input type="text" name="linktin"  value="<?php echo $_SESSION['id_linktin'];?>"/></div>
           
            <div class="inp"><input type="submit"/></div>
        </div>
          <div class="clear"></div>
      
        </form>
       
  

    <?php
//      <li class="profile">Racasan Vlad <span>edit</span></li>
        echo "<li class=\"profile\">".$_SESSION['prenume']." ".$_SESSION['nume']." </li>";

//		<li>22.11.1989 <span>edit</span></li>
        echo "<li>".$_SESSION['data_nasteri']." </li>";

//		<li>Roman <span>edit</span></li>
        echo "<li>".$_SESSION['nationalitate']." </li>";

//		<li>Sibiu <span>edit</span></li>
         echo "<li>".$_SESSION['oras_curent']." </li>";

//	    <li>Romania<span>edit</span></li>
        echo "<li>".$_SESSION['tara_curenta']." </li>";

//		<li class="telefon">0752229631<span>edit</span></li>
         echo "<li class = \"telefon\">".$_SESSION['numar_telefon']." </li>";

//		<li class="mail">racasan.vlad@gmail.com <span>edit</span>
        echo "<li class = \"mail\">".$_SESSION['adresa_email']."  </li>";

//		<li class="skype">racasanvlad <span>edit</span></li>
        echo "<li class = \"skype\">".$_SESSION['skype']." </li>";

//		<li class="facebook">Racasan Vlad<span>edit</span></li>
        echo "<li class = \"facebook\">".$_SESSION['twitter']." </li>";

//		<li class="linkedin">Racasan Vlad<span>edit</span></li>
        echo "<li class = \"linkedin\">".$_SESSION['id_linktin']." </li>";


//	    </ul>
        echo "</ul>";

//	    <img src="obj/img/alumni/1.jpg">

         
//	    <ul>
       
 ?>
<div class="clear"></div>
       <h2>Educatie <span id="edit_educatie">edit</span></h2>
       

         <form id="form_educatie" method="post" action="script/actualizare_educatie.php">
             <?php
             $sql = " SELECT ID_USER,CALIFICARE,INSTITUTIE, DATA_ADMITERE ,DATA_ABSOLVIRE   FROM EDUCATIE  WHERE ID_USER ='".$_SESSION['id_user']."'";
             $result = mysql_query($sql,$bazadedate);
             $row = mysql_fetch_array($result,MYSQL_ASSOC);
             ?>
            <div class="two right">
            <div class="inp"><label>Calificare</label><input type="text" name="calificare_1" value="<?php echo $row['CALIFICARE'];?>" /></div>
            <div class="inp"><label>Institutie</label><input type="text" name="insitutie_1" value="<?php echo $row['INSTITUTIE'];?>" /></div>
            <div class="inp"><label>Din</label><input type="date" name="data_admitere_1" value="<?php echo $row['DATA_ADMITERE'];?>" /></div>
            <div class="inp"><label>Pana in</label><input type ="date" name ="data_absolvire_1" value="<?php echo $row['DATA_ABSOLVIRE'];?>" /></div>
           </div>
           <?php
                $row = mysql_fetch_array($result,MYSQL_ASSOC);
                ?>
            <div class="two right">
            <div class="inp"><label>Calificare</label><input type="text" name="calificare_2" value="<?php echo $row['CALIFICARE'];?>" /></div>
            <div class="inp"><label>Institutie</label><input type="text" name="insitutie_2" value="<?php echo $row['INSTITUTIE'];?>" /></div>
            <div class="inp"><label>Din</label><input type="date" name="data_admitere_2"  value="<?php echo $row['DATA_ADMITERE'];?>" /></div>
            <div class="inp"><label>Pana in</label><input type ="date" name ="data_absolvire_2" value="<?php echo $row['DATA_ABSOLVIRE'];?>"/></div>
            </div>
             <?php
             $row = mysql_fetch_array($result,MYSQL_ASSOC);
             ?>

             <div class="two left">
            <div class="inp"><label>Calificare</label><input type="text" name="calificare_3" value="<?php echo $row['CALIFICARE'];?> "/></div>
            <div class="inp"><label>Institutie</label><input type="text" name="insitutie_3" value="<?php echo $row['INSTITUTIE'];?>"/></div>
            <div class="inp"><label>Din</label><input type="date" name="data_admitere_3"  value="<?php echo $row['DATA_ADMITERE'];?>"/></div>
            <div class="inp"><label>Pana in</label><input type ="date" name ="data_absolvire_3" value="<?php echo $row['DATA_ABSOLVIRE'];?>"/></div>

        </div>
            <div class="inp"><input type="submit"/></div>
        </form>
     <div class="clear"></div>

        <?php
//		<li>Inginer IT, Universitatea Lucian Blaga Sibiu, 2009-2013 <span>edit</span></li>
//		<li>Mate-Info,Liceul Teoretic Onisifor Ghibu, Sibiu 2005-2009 <span>edit</span></li>
//		<li>Scoala generala nr 13, Sibiu 2001-2005 <span>edit</span></li>
    echo "<ul>";
        $sql = " SELECT ID_USER,CALIFICARE,INSTITUTIE, YEAR(DATA_ADMITERE) AS DATAA,YEAR(DATA_ABSOLVIRE) AS DATAB  FROM EDUCATIE  WHERE ID_USER ='".$_SESSION['id_user']."' ORDER BY DATAB DESC";
        $result = mysql_query($sql,$bazadedate);
        while($row = mysql_fetch_array($result,MYSQL_ASSOC))
        {
        echo "<li>".$row['CALIFICARE'].", ".$row['INSTITUTIE'].", ".$row['DATAA']."-".$row['DATAB']." </li>";
        }

//	</ul>
        echo "</ul>";

//	<h2>Loc de munca</h2>
        echo "<h2>Loc de munca<span id=\"edit_lucru\"> edit</span></h2>";
        ?>

         <div class="clear"></div>
        <form id="form_loc_munca" method="post" action="script/actualizare_locuri_munca.php">
            <?php
            $sql = " SELECT *  FROM EXPERIENTA_DE_MUNCA  WHERE ID_USER ='".$_SESSION['id_user']."' ORDER BY PANA DESC";
            $result = mysql_query($sql,$bazadedate);
 			if($row = mysql_fetch_array($result,MYSQL_ASSOC))
			{
            ?>
             <div class="two left">
<div class="inp"><label>Pozitie</label><input type="text" name="pozitie_1" value="<?php echo $row['POZITIE']; ?>" /></div>
<div class="inp"><label>Institutie</label><input type="text" name="firma_1" value ="<?php echo $row['INSTITUTIE']; ?>" /></div>
<div class="inp"><label>Din</label><input type="date" name="din_1" value ="<?php echo $row['DIN']; ?>" /></div>
<div class="inp"><label>Pana in</label><input type ="date" name ="pana_in_1" value ="<?php echo $row['PANA']; ?>"  /></div>
            </div>
            <?php
			}
			
            if($row = mysql_fetch_array($result,MYSQL_ASSOC))
			{
            ?>
            <div class="two right">
            <div class="inp"><label>Pozitie</label><input type="text" name="pozitie_2" value="<?php echo $row['POZITIE']; ?>" /></div>
            <div class="inp"><label>Institutie</label><input type="text" name="firma_2" value ="<?php echo $row['INSTITUTIE']; ?>" /></div>
            <div class="inp"><label>Din</label><input type="date" name="din_2" value ="<?php echo $row['DIN']; ?>" /></div>
            <div class="inp"><label>Pana in</label><input type ="date" name ="pana_in_2" value ="<?php echo $row['PANA']; ?>"  /></div>
    </div>
            <?php
			}
			
            if($row = mysql_fetch_array($result,MYSQL_ASSOC))
			{
            ?>
            <div class="two right">
                <div class="inp"><label>Pozitie</label><input type="text" name="pozitie_3" value="<?php echo $row['POZITIE']; ?>" /></div>
                <div class="inp"><label>Institutie</label><input type="text" name="firma_3" value ="<?php echo $row['INSTITUTIE']; ?>" /></div>
                <div class="inp"><label>Din</label><input type="date" name="din_3" value ="<?php echo $row['DIN']; ?>" /></div>
                <div class="inp"><label>Pana in</label><input type ="date" name ="pana_in_3" value ="<?php echo $row['PANA']; ?>"  /></div>
            </div>
			<?php } ?>
             <div class="inp"><input type="submit"/></div>
        </form>

        <?php
		
//	<ul>
        echo "<ul>";

//		<li>Dezvoltator web, Webia, 01.08.2011-01.12.2011 <span>edit</span></li>
         $sql = " SELECT *  FROM EXPERIENTA_DE_MUNCA  WHERE ID_USER ='".$_SESSION['id_user']."' ORDER BY PANA DESC";
        $result = mysql_query($sql,$bazadedate);
        while($row = mysql_fetch_array($result,MYSQL_ASSOC))
        {
            echo "<li>".$row['POZITIE'].", ".$row['INSTITUTIE'].", ".$row['DIN']."-".$row['PANA']." </li>";
        }

//	</ul>
        echo "</ul>";

//	<h2>Pozitii in AIESEC</h2>
        echo "<h2>Pozitii in AIESEC <span id=\"edit_aiesec\">edit</span></h2>";

?>

 <div class="clear"></div>
        <form id="form_experienta_aiesec" method="post" action="script/actualizare_xp_aiesec.php">
        <?php
            $sql = " SELECT *  FROM EXPERIENTA_AIESEC  WHERE ID_USER ='".$_SESSION['id_user']."' ORDER BY PANA DESC";
            $result = mysql_query($sql,$bazadedate);
            $row = mysql_fetch_array($result,MYSQL_ASSOC);
            ?>
            <div class="two left">
<div class="inp"><label>Pozitie</label><input type ="text" name ="Pozitie_1" value ="<?php echo $row['POZITIE'];?>"/></div>
<div class="inp"><label>Tara</label><input type ="text" name ="tara_1" value ="<?php echo $row['TARA'];?>"/></div>
<div class="inp"><label>LC</label><input type="text" name ="comitet_local_1" value ="<?php echo $row['COMITET_LOCAL'];?>"/></div>
<div class="inp"><label>Din</label><input type="date" name="din_aiesec_1" value ="<?php echo $row['DIN'];?>"/></div>
<div class="inp"><label>Pana in</label><input type="date" name="pana_aiesec_1" value ="<?php echo $row['PANA'];?>"/></div>
</div>
            <?php
            $row = mysql_fetch_array($result,MYSQL_ASSOC);
            ?>

            <div class ="two right">
    <div class="inp"><label>Pozitie</label><input type ="text" name ="Pozitie_2" value ="<?php echo $row['POZITIE'];?>"/></div>
    <div class="inp"><label>Tara</label><input type ="text" name ="tara_2" value ="<?php echo $row['TARA'];?>"/></div>
    <div class="inp"><label>LC</label><input type="text" name ="comitet_local_2" value ="<?php echo $row['COMITET_LOCAL'];?>"/></div>
    <div class="inp"><label>Din</label><input type="date" name="din_aiesec_2" value ="<?php echo $row['DIN'];?>"/></div>
    <div class="inp"><label>Pana in</label><input type="date" name="pana_aiesec_2" value ="<?php echo $row['PANA'];?>"/></div>
</div>
            <?php
            $row = mysql_fetch_array($result,MYSQL_ASSOC);
            ?>

            <div class ="two right">
    <div class="inp"><label>Pozitie</label><input type ="text" name ="Pozitie_3" value ="<?php echo $row['POZITIE'];?>"/></div>
    <div class="inp"><label>Tara</label><input type ="text" name ="tara_3" value ="<?php echo $row['TARA'];?>"/></div>
    <div class="inp"><label>LC</label><input type="text" name ="comitet_local_3" value ="<?php echo $row['COMITET_LOCAL'];?>"/></div>
    <div class="inp"><label>Din</label><input type="date" name="din_aiesec_3" value ="<?php echo $row['DIN'];?>"/></div>
    <div class="inp"><label>Pana in</label><input type="date" name="pana_aiesec_3" value ="<?php echo $row['PANA'];?>"/></div>
</div>
<div class="inp"><input type = "submit"/></div>
  </form>
<?php
//	<ul>
        echo "<ul>";

//		<li>OC Comm & Design ITTT 2012, Sibiu,Romania 10.06.2012-03.09.2012 <span>edit</span></li>
        $sql = " SELECT *  FROM EXPERIENTA_AIESEC  WHERE ID_USER ='".$_SESSION['id_user']."'";
        $result = mysql_query($sql,$bazadedate);
        while($row = mysql_fetch_array($result,MYSQL_ASSOC))
        {
            echo "<li>".$row['POZITIE'].", ".$row['COMITET_LOCAL'].", ".$row['TARA'].", ".$row['DIN']."-".$row['PANA']." </li>";
        }



//	</ul>
        echo "</ul>";


//	<h2>Expertize</h2>
        echo "<h2>Expertize <span id=\"edit_expertiza\">edit</span></h2>";
?>

   <div class="clear"></div>
        <form id="form_expertiza" method="post" action="script/expertize.php">
            <?php
            $nr = 0;
        $mysql  = "SELECT * FROM HELPER_DOMENIU_ACTIVITATE";
        $result =  mysql_query($mysql,$bazadedate);
        while($row = mysql_fetch_array($result,MYSQL_ASSOC))
        {
        $id = $row['ID_ACTIVITATE'];
        $nume = $row['NUME'];
        if($nr % 5 == 0)
     echo "<div class = \" one left\">";
            $mysql2  = "SELECT * FROM DOMENIU_DE_ACTIVITATE WHERE ID_USER = ".$_SESSION['id_user']." AND ID_ACTIVITATE=".$id.";";
            $result2 =  mysql_query($mysql2,$bazadedate);
            if(mysql_num_rows($result2) == 1)
                        echo "<div class=\"inp\"><label>" . $nume . "</label><input type=\"checkbox\" name=\"" . $nume . "\" value=\"" . $id . "\" checked /> </div>";
            else
                         echo "<div class=\"inp\"><label>" . $nume . "</label><input type=\"checkbox\" name=\"" . $nume . "\" value=\"" . $id . "\" /> </div>";
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
         <div class="inp"><input type="submit"/></div>
        </form>
<div class="clear"></div>
<?php
//	<ul class="expertise">
        echo "<ul class=\"expertise\">";

//		<li>Marketing</li>
        $sql = " SELECT *  FROM DOMENIU_DE_ACTIVITATE DOM, HELPER_DOMENIU_ACTIVITATE HELPER   WHERE DOM.ID_ACTIVITATE = HELPER.ID_ACTIVITATE  AND DOM.ID_USER ='".$_SESSION['id_user']."'";

        $result = mysql_query($sql,$bazadedate);
        while($row = mysql_fetch_array($result,MYSQL_ASSOC))
        {
            echo "<li>".$row['NUME']."</li>";
        }

//	</ul>
        echo "</ul>";
    ?>
		</div>
</div>